<br><h2><?= $title ?></h2><br>

<?php echo validation_errors() ?>

<?php echo form_open('index.php/posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id'] ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post['title'] ?>">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" name="category_id">
      <?php foreach ($categories as $category):?>
      <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
    <?php endforeach; ?>
    </select>
  </div><br>
  <div class="form-group">
    <label>Content</label>
     <textarea id="editor1" class="form-control" name="body" placeholder="Add Content" ><?php echo $post['body']?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
