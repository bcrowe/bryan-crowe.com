<div id="posts">
	<?php $postCount = count($posts); ?>
	<?php $current = 1; ?>
	<?php foreach ($posts as $post): ?>
		<h2><?php echo h($post['Post']['title']); ?></h2>
		<!-- <p class="datetime"><?php echo $this->Time->format('l, F j, Y H:i', $post['Post']['created']); ?></p> -->
		<p><?php echo $post['Post']['summary']; ?></p>
		<?php if ($current < $postCount): ?>
			<hr>
		<?php endif; ?>
		<?php $current++; ?>
	<?php endforeach; ?>
</div>
