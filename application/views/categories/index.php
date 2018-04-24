<h2><?= $title ?></h2><br>
<ul class="list-group">
  <?php foreach ($categories as $category): ?>
    <li class="list-group-item"><a href="<?php echo site_url('index.php/categories/posts/' . $category['id']) ?>">
    <?php echo $category['name'] ?></a>
    <?php if ($this->session->userdata('user_id') == $category['user_id']):?>
    <form class="cat-delete" action="categories/delete/<?php echo $category['id'] ?>" method="post">
      <input type="submit" class="btn btn-primary btn-danger float-right" value="Delete">
    </form>
    <?php endif; ?>
  </li>
  <?php endforeach; ?>
</ul>
