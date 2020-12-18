<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class=" row justify-content-center">
                <label style="color: red;"><?php echo validation_errors();  ?></label>
            </div>

            <?php echo form_open_multipart('categories/create'); ?>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>