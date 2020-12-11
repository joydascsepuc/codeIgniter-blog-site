<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<h2><?= $title ?></h2>
	<ul class="list-group">
	<?php foreach($categories as $category): ?>
		<li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
		</li>
	<?php endforeach;?>
	</ul>
</div>