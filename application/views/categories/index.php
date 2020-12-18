<!DOCTYPE html>
<html lang="en">

<!-- header.php -->
<?php $this->load->view('includes/header.php'); ?>

<body>

    <!-- navbar.php -->
    <?php $this->load->view('includes/navbar.php'); ?>

    <!-- Page Header -->
    <?php $this->load->view('includes/v_headthree.php'); ?>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo SITE_NAME ?></h1>
                    <span class="subheading"><?php echo $title ?></span>
                </div>
            </div>
        </div>
    </div>
    </header>

    <!-- maincontent.php -->
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php foreach($categories as $category) : ?>
                <div class="post-preview">
                    <li class="list-group-item">
                        <a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>">
                            <?php echo $category['name']; ?>
                        </a>
                        <div style="text-align: right;">
                            <?php if($this->session->userdata('user_id') == $category['user_id']) : ?>
                            <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>"
                                method="POST">
                                <input type="submit" class="btn-link text-danger" value="[X]">
                            </form>
                            <?php endif; ?>
                        </div>
                    </li>
                </div>
                <?php endforeach; ?>

                <!-- pager.php -->


                <!-- footer.php -->
                <?php $this->load->view('includes/footer.php'); ?>

                <!-- js.php -->
                <?php $this->load->view('includes/js.php'); ?>

</body>

</html>