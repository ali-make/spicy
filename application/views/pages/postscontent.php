  <!-- Main Content -->
  <div class="container">
      <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">

              <?php foreach($posts as $post) : ?>
              <div class="post-preview">
                  <a href="<?php echo site_url('/posts/'.$post['slug']); ?>">
                      <h2 class="post-title">
                          <?php echo $post['title']; ?>
                      </h2>
                      <h4 class="post-subtitle">
                          <?php echo word_limiter($post['body'], 10); ?>
                      </h4>
                  </a>
                  <p class="post-meta">Post on: <?php echo $post['created_at']; ?> in
                      <strong><?php echo $post['name']; ?></strong></p>
              </div>
              <hr>
              <?php endforeach; ?>