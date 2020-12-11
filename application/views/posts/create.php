<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container mt-5">
	<h2><?=$title ?></h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open_multipart('posts/create');?>
	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Give Title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea class="form-control" id="body" placeholder="Give body text" name="body"></textarea>
	  </div>

	  <div class="form-group">
	    <label for="categories">Categories</label>
	    <select name="category_id" id="categories" class="form-control">
	    	<?php foreach ($categories as $category):  ?>
	    		<option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
	    	<?php endforeach; ?>
	    </select>
	  </div>

	  <div class="form-group">
	    <label>Upload Image</label>
	    <input name="userfile" type="file" size="20">
	  </div>

	  <button type="submit" class="btn btn-outline-primary">Submit</button>

	</form>

</div>