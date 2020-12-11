<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<h2><?=$title ?></h2>

	<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		<div class="col-md-3">
			<img src="<?php echo site_url(); ?>assets/images/posts/<?php echo$post['post_image']; ?>" style='height: 200px; width: 200px;'>
		</div>

		<div class="col-md-9">
			<small class="time_section">Posted on : <?php echo $post['created_at']; ?> With Category <strong><?php echo $post['name']; ?></strong></small><br>
			<?php echo word_limiter($post['body'],50); ?> 
			<p><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
		</div>
	</div>
	<?php endforeach; ?>
</div>

