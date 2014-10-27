<?php $posts = getBlogPosts($con); ?>

<div class="container">
	<?php 
		foreach($posts as $post) {
			echo('<div class="row">');
			
			echo('<h1>' . $post['title'] . '</h1>');
			echo('<p>' . $post['content'] . '</p>');
			
			echo('</div>');
		}
	?>
</div>
