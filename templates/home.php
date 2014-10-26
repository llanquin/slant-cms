<?php $posts = getBlogPosts(); ?>

<main>
	<?php 
		foreach($posts as $post) {
			echo('<article>');
			
			echo('<h1>' . $post['title'] . '</h1>');
			echo('<p>' . $post['content'] . '</p>');
			
			echo('</article>');
		}
	?>
</main>