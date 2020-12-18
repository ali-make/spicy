<?php

class Comments extends CI_Controller
{
    public function create($post_id)
    {
        $slug = $this->input->post('slug');
        $data['post'] = $this->post_model->get_post($slug);

        $data['title'] = $slug;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        $this->form_validation->set_rules('body', 'Body', 'required');

        $data['comments'] = $this->comment_model->get_comment($post_id);

        if($this->form_validation->run() === FALSE) {
            $this->load->view('view', $data);
        } else {
            $this->comment_model->create_comment($post_id);
            redirect('home/view/'.$slug);
        }
    }
}