<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<h2><?= $title; ?></h2>
	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart('categories/create'); ?>
		<div class="container">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Enter Name">
			</div>
			<button type="submit" class="btn btn-outline-primary">Submit</button>
		</div>
	</form>
</div>