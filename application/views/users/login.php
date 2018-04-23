<?php echo form_open('index.php/users/login'); ?>
<div class="row">
  <div class="my-form mx-auto">
    <h1 class="text-center">Sign In</h1><br>
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus><br>
      <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
