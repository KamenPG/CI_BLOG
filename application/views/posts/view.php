<br><h2><?php echo $post['title'] ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at'] ?></small><br>
<div class="post-body">
  <?php echo $post['body'] ?>
</div>
<hr>
<?php echo form_open('index.php/posts/delete/' . $post['id']) ?>
<input type="submit" name="" class="btn btn-danger" value="Delete" >
<a class="btn btn-primary pull-left" href="<?php echo base_url('index.php/posts/edit/'.$post['slug']); ?>">Edit</a>

</form>
