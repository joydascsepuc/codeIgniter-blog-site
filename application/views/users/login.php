<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 class="text-center mt-5 mb-3"><?php echo $title; ?></h3>

			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>

			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>

			<button type="submit" class="btn btn-secondary btn-block">Login</button>

		</div>
		<div class="col-md-4"></div>
	</div>
<?php echo form_close(); ?>