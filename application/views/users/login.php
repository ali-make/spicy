<div class="row justify-content-center">
    <?php echo form_open('users/login'); ?>
    <h1 class="text-center"><?php echo $title; ?></h1><hr>
    <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <?php echo form_close(); ?>
</div>