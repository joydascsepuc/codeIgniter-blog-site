<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css");?>">
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand font-weight-bold" href="<?php echo base_url(); ?>">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if(!$this->session->userdata('logged_in')) : ?> 
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
            </li>
        <?php endif;?>

        <?php if($this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>users/logout">LogOut</a>
            </li>
        <?php endif;?>
      </ul>
    
  </div>
</nav>

  <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered');'</p>' ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedInFailed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedInFailed');'</p>' ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedIn')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedIn');'</p>' ?>
  <?php endif; ?>

  <?php if($this->session->flashdata('user_loggedOut')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedOut');'</p>' ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('post_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created');'</p>' ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_deleted');'</p>' ?>
  <?php endif; ?>

   <?php if($this->session->flashdata('post_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated');'</p>' ?>
  <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created');'</p>' ?>
  <?php endif; ?>
