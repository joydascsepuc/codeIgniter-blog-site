<div class="container mt-5">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h4 class="text-center"><?=$title ?></h4>
				<?php echo validation_errors(); ?>

				<?php echo form_open('users/register'); ?>
				
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="Name">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="E-mail">
				</div>

				<div class="form-group">
					<label>User-name</label>
					<input type="text" name="username" class="form-control" placeholder="User Name">
				</div>

				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" placeholder="Phone">
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" placeholder="Password">
				</div>

				<div class="form-group">
					<label>Confirm Password</label>
					<input type="Password" name="password2" class="form-control" placeholder="Confirm Password">
				</div>

				<button type="submit" class="btn btn-primary btn-block">Submit</button>

				<?php echo form_close(); ?>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>