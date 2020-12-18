<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class=" row justify-content-center">
                <label style="color: red;"><?php echo validation_errors();  ?></label>
            </div>

            <?php echo form_open('home/update'); ?>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Add Title"
                    value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="editor1" class="form-control" name="body" placeholde="Add Body"
                    <?php echo $post['body']; ?>></textarea>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control">
                    <?php foreach($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>