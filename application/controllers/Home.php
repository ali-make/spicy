<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($offset = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url() . 'home/index/';
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');

        // Init Pagination
        $this->pagination->initialize($config);

        $data['title'] = 'Home';

        $data['posts'] = $this->post_model->get_post(FALSE, $config['per_page'], $offset);

        $this->load->view('index', $data);
    }

    public function posts($offset = 0)
    {
        // Pagination Config
        $config['base_url'] = base_url() . 'home/posts/';
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-link');

        // Init Pagination
        $this->pagination->initialize($config);

        $data['title'] = 'Posts';

        $data['posts'] = $this->post_model->get_post(FALSE, $config['per_page'], $offset);

        $this->load->view('posts', $data);
    }

    public function view($slug = NULL)
    {
        $data['post'] = $this->post_model->get_post($slug);
        $post_id = $data['post']['id'];
        $data['comments'] = $this->comment_model->get_comment($post_id);

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('view', $data);
    }

    public function create()
    {
        // check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['title'] = 'Create Post';

        $data['categories'] = $this->post_model->get_categories();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('createpost', $data);
        } else {
            // upload image
            $config['upload_path'] = './static/img/posts/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10048';
            $config['max_width'] = '3000';
            $config['max_height'] = '3000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());
                $post_image = 'post-sample-image.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }

            $this->post_model->create_post($post_image);

            // set message
            $this->session->set_flashdata('post_created', 'Your post has been created');

            redirect('home');
        }
    }

    public function delete($id)
    {
        // check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $this->post_model->delete_post($id);

        // set message
        $this->session->set_flashdata('post_deleted', 'Your post has been deleted');

        redirect('home/posts');
    }

    public function edit($slug)
    {
        // check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        $data['post'] = $this->post_model->get_post($slug);

        // check user
        if ($this->session->userdata('user_id') != $this->post_model->get_post($slug)['user_id']) {
            redirect('home/posts');
        }

        $data['categories'] = $this->post_model->get_categories();

        if (empty($data['post'])) {
            show_404();
        }

        $data['title'] = 'Edit Post';

        $this->load->view('editpost', $data);
    }

    public function update()
    {
        // check login
        if (!$this->session->userdata['logged_in']) {
            redirect('users/login');
        }

        $this->post_model->update_post();

        // set message
        $this->session->set_flashdata('post_updated', 'Your post has been updated');

        redirect('home/posts');
    }
}
