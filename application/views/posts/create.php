<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<div class="form-group">
  <label >Title</label>
  <input type="text" class="form-control" placeholder="Enter Title" name="title">
</div>
<div class="form-group">
  <label>Body</label>
  <textarea class="form-control" placeholder="Add Body" name="body"></textarea>
</div>
<label>Category</label>
<div class="form-group">
  <select class="custom-select" name="category_id">
    <?php foreach($categories as $category): ?>
    <option value="<?php echo $category['id']; ?>"><?php echo $category['name'] ?></option>
    <?php endforeach; ?>
  </select>
</div>
<div class="form-group">
  <label>Upload Image</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" name="userfile" size="20">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>