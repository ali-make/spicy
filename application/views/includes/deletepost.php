<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <?php if($this->session->userdata('user_id') == $post['user_id']): ?>
            <hr>
            <div style="text-align: right;">
                <a class="btn btn-default btn-lg"
                    href="<?php echo base_url(); ?>home/edit/<?php echo $post['slug']; ?>">
                    <div style="text-decoration: underline;">Edit</div>
                </a>
            </div>

            <?php echo form_open('/home/delete/'.$post['id']); ?>
            <input type="submit" value="Delete" class="btn btn-danger">

            </form>
            <?php endif; ?>
            <hr>