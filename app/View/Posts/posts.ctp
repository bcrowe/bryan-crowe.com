<div id="posts">
	<?php $postCount = count($posts); ?>
	<?php $current = 1; ?>
	<?php foreach ($posts as $post): ?>
		<div class="row">
			<div class="col-md-3">
				<div class="time-circle">
					<div class="time-day">
						<?php echo $this->Time->format('d', $post['Post']['created']); ?>
					</div>
					<div class="time-month">
						<?php echo $this->Time->format('M', $post['Post']['created']); ?>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<h2><?php echo h($post['Post']['title']); ?></h2>
			</div>
		</div>
		<div class="row">
			<p><?php echo $post['Post']['summary']; ?></p>
		</div>
		<?php if ($current < $postCount): ?>
			<hr>
		<?php endif; ?>
		<?php $current++; ?>
	<?php endforeach; ?>
</div>
