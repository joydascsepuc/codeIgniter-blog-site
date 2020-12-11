<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container mt-5">

	<h2><?php echo $post['title']; ?></h2>
	<small class="time_section">Posted on : <?php echo $post['created_at']; ?></small>
	<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo$post['post_image'];?>" style='height: 200px; width: 200px;'>
	<div class="post-body">
		<?php echo $post['body']; ?>
	</div>


	<a class="btn btn-primary" href="edit/<?php echo $post['slug'];?>">Edit</a>

	<?php echo form_open('/posts/delete/'.$post['id']); ?>
		<input type="submit" value="Delete" class="btn btn-danger"></input>
	</form>
	
	<hr>


	<!-- Comment Section -->
	<h3>Add Comments</h3>
	<?php echo validation_errors(); ?>

	<?php echo form_open('Comments/create/'.$post['id']);?>
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>E-mail</label>
			<input type="text" name="email" class="form-control">
		</div>

		<div class="form-group">
			<label>Body</label>
			<textarea name="body" class="form-control"></textarea>
		</div>

		<input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
		<button type="submit" class="btn btn-outline-primary">Post Comment</button>
	</form>

</div>