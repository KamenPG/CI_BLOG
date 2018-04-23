<h2><?= $title ?></h2><br>

<?php echo validation_errors() ?>

<?php echo form_open_multipart('index.php/posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category_id">
      <?php foreach ($categories as $category):?>
      <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
    <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Upload Image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add Content" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>
