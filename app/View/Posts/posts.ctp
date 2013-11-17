<div id="posts">
	<?php $postCount = count($posts); ?>
	<?php $current = 1; ?>
	<?php foreach ($posts as $post): ?>
		<div class="row post-row">
			<div class="col-md-2 time-col">
				<div class="time-circle">
					<div class="time-day">
						<?php echo $this->Time->format('M', $post['Post']['created']); ?>
					</div>
					<div class="time-month">
						<?php echo $this->Time->format('d', $post['Post']['created']); ?>
					</div>
				</div>
			</div>
			<div class="col-md-10">
				<div class="row">
					<h2 class="post-title" data-id="<?php echo $post['Post']['id']; ?>"><?php echo h($post['Post']['title']); ?></h2>
				</div>
			</div>
		</div>
		<?php $current++; ?>
	<?php endforeach; ?>
</div>
