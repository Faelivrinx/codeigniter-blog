<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
  <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" placeholder="Enter Title" name="title" value="<?php echo $post['title'] ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" placeholder="Add Body" name="body"><?php echo $post['body'] ?></textarea>
  </div>
    <div class="form-group">
    <select class="custom-select" name="category_id">
    <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name'] ?></option>
    <?php endforeach; ?>
  </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>