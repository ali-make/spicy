  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><?php echo SITE_NAME ?></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
              data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
              aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('home/posts'); ?>">Posts</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('categories/index'); ?>">Categories</a>
                  </li>
                  <?php if(!$this->session->userdata('logged_in')) : ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('users/login'); ?>">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('users/register'); ?>">Register</a>
                  </li>
                  <?php endif; ?>
                  <?php if($this->session->userdata('logged_in')) : ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('home/create'); ?>">Create Post</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('categories/create'); ?>">Create Category</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo base_url('users/logout'); ?>">Logout</a>
                  </li>
                  <?php endif; ?>
              </ul>
          </div>
      </div>
  </nav>