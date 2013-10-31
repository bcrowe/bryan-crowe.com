<div class="posts index">
	<?php foreach ($posts as $post): ?>
		<?php //echo h($post['Post']['id']); ?>
		<h2><?php echo h($post['Post']['title']); ?></h2>
		<p><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
		<p><?php echo h($post['Post']['summary']); ?></p>
		<hr>
	<?php endforeach; ?>
</div>
