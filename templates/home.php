<?php $posts = getBlogPosts($con); ?>

<div class="container">
	<?php foreach($posts as $post): ?>
		<div class="panel panel-default">
			<div class="panel-heading"><h3><?= $post['title']; ?></h3></div>
			<div class="panel-body">
				<?= $post['content']; ?>
			</div>
			<div class="panel-footer">
				<p class="text-right">
					<?= date("H:i:s d-m-Y", $post['datetime']); ?> &ndash; <a href="#"><?= getUser($con, $post['userid'])['displayname']; ?></a>
				</p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
