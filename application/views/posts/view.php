<h2><?php echo $post['title'] ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'] ?></small><br>
<div class="post-body">
  <?php echo $post['body'] ?>
</div>
<?php if ($this->session->userdata('user_id') == $post['user_id']):?>
<hr>
<?php echo form_open('index.php/posts/delete/' . $post['id']) ?>
<input type="submit" name="" class="btn btn-danger" value="Delete" >
<a class="btn btn-primary pull-left" href="<?php echo base_url('index.php/posts/edit/'.$post['slug']); ?>">Edit</a>
</form>
<?php endif;?>
<hr>
<h3>Comments</h3>
<?php if($comments): ?>
<?php foreach ($comments as $comment):?>
  <div class="well">
      <h5><?php echo $comment['body'] ?> [by <strong><?php echo $comment['name'] ?></strong> on <strong><?php echo $comment['created_at'] ?></strong>]</h5>
  </div>
<?php endforeach; ?>
<?php else: ?>
  <p>No Comments</p>
<?php endif; ?>
<hr><br>
<h3>Add Comment</h3><br>
<?php echo validation_errors() ?>
<?php echo form_open('index.php/comments/create/' . $post['id']) ?>
<div class="form-group">
  <label>Name</label>
  <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
  <label>Email</label>
  <input type="text" name="email" class="form-control">
</div>
<div class="form-group">
  <label>Comment</label>
  <textarea name="body" class="form-control"></textarea>
</div>
<input type="hidden" name="slug" value="<?php echo $post['slug'] ?>">
<button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
