<html>
  <head>
    <title>ciBlog</title>
    <link type="text/css" rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css">
    <script src="http://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
  </head>
   <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<a class="navbar-brand" href="<?php echo base_url(); ?>">ciBLog</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/about">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/posts">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/categories">Categories</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/posts/create">Create Post</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/categories/create">Create Category</a>
    </li>
  </ul>
</div>
</nav>


<div class="container">
