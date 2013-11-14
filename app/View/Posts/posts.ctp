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
					<h2><?php echo h($post['Post']['title']); ?></h2>
				</div>
				<!-- <div class="row">
					<p>
						<?php
						echo $this->Text->truncate($post['Post']['summary'], 100, array(
							'ellipsis' => ' ...',
							'exact'    => false,
							'html'     => false
						));
						?>
					</p>
				</div> -->
				<?php if ($current < $postCount): ?>
					<!-- <div class="row">
						<hr>
					</div> -->
				<?php endif; ?>
			</div>
		</div>
		<?php $current++; ?>
	<?php endforeach; ?>
</div>
