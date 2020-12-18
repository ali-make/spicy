<h3>Comments</h3>
<?php if (!empty($comments)) : ?>
    <?php foreach ($comments as $comment) : ?>
        <div class="well">
            <h6><?php echo $comment['body']; ?> [by <strong><?php echo $comment['name']; ?></strong>]</h6>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <p>No Comments To Display</p>
<?php endif; ?>
<hr>
<h3>Add Comment</h3>
<label style="color: red;"><?php echo validation_errors();  ?></label>
<?php echo form_open('comments/create/' . $post['id']); ?>
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
    <label>Body</label>
    <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
<button class="btn btn-primary" type="submit">Submit</button>
</form>