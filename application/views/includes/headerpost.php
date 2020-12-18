  <!-- Page Header -->
  <header class="masthead"
      style="background-image: url(<?php echo base_url(); ?>static/img/posts/<?php echo $post['post_image']; ?>);">
      <div class="overlay"></div>
      <div class="post-heading">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-10 mx-auto">
                      <div class="post-preview">
                          <h1 class="post-title">
                              <?php echo $post['title']; ?>
                              </h>
                              <h5 class="post-subtitle">
                                  <?php echo word_limiter($post['body'], 10); ?>
                              </h5>
                              <p class="post-meta">Post on: <?php echo $post['created_at']; ?></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>