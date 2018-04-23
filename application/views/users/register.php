<div class="row">
<div class="my-form mx-auto">
<h2>Sign Up</h2><br>

<?php echo validation_errors() ?>

<?php echo form_open('index.php/users/register'); ?>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Add Name">
  </div>
  <div class="form-group">
    <label>Zipcode</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Add Zipcode">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="username" placeholder="Add Username">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Add Email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Add Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
</div>
