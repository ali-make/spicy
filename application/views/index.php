<!DOCTYPE html>
<html lang="en">

<!-- header.php -->
<?php $this->load->view('includes/header.php'); ?>

<body>

    <!-- navbar.php -->
    <?php $this->load->view('includes/navbar.php'); ?>

    <!-- Page Header -->
    <?php $this->load->view('includes/v_headone.php'); ?>
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

    <!-- flash.php -->
    <?php $this->load->view('includes/flash.php'); ?>

    <!-- maincontent.php -->
    <?php $this->load->view('pages/maincontent.php'); ?>

    <!-- pager.php -->

    <!-- pagination.php -->
    <?php $this->load->view('includes/pagination.php'); ?>

    <!-- footer.php -->
    <?php $this->load->view('includes/footer.php'); ?>

    <!-- js.php -->
    <?php $this->load->view('includes/js.php'); ?>

</body>

</html>