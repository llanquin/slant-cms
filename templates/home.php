<?php $posts = getBlogPosts($con); ?>

<div class="container">
	<?php foreach($posts as $post): ?>
		<div class="panel panel-default">
			<div class="panel-heading"><h1><?php $post['title']; ?></h1></div>
			<div class="panel-body">
				<?php $post['content']; ?>
			</div>
			<div class="panel-footer">
				<p class="text-right">
					<?= date("H:m:s d-m-Y", $post['datetime']); ?> &ndash; <a href="#"><?= getUser($con, $post['userid'])['displayname']; ?></a>
				</p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
