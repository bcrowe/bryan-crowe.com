<div id="post" style="display: none;">
	<h2><?php echo h($post['Post']['title']); ?></h2>
	<p class="date"><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
	<?php echo $post['Post']['body']; ?>
</div>
<div id="comments" style="display: none;">
	<h3>Comments</h3>
	<?php if (!empty($post['Comment'])): ?>
		<?php foreach ($post['Comment'] as $comment): ?>
			<div class="row">
				<div class="col-md-3">
					<?php echo $comment['name']; ?>
				</div>	
				<div class="col-md-9">	
					<?php echo $comment['body']; ?>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
	<div id="comment-form" class="row">
		<?php
		echo $this->Form->create('Comment', [
			'url'  => '/comments/add',
			'role' => 'form'
		]);
		?>
		<div class="row">
			<div class="col-xs-4">
				<?php
				echo $this->Form->input('name', [
					'class'       => 'form-control',
					'placeholder' => 'Your Name',
					'label'       => false
				]);
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php
				echo $this->Form->input('email', [
					'class'       => 'form-control',
					'placeholder' => 'E-Mail Address',
					'label'       => false
				]);
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<?php
				echo $this->Form->input('website', [
					'class'       => 'form-control',
					'placeholder' => 'Website',
					'label'       => false
				]);
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<?php
				echo $this->Form->input('body', [
					'class'       => 'form-control',
					'rows'        => 5,
					'placeholder' => 'Your comments...',
					'label'       => false
				]);
				?>
			</div>
		</div>
		<?php echo $this->Form->hidden('post_id', ['value' => $post['Post']['id']]); ?>
		<?php echo $this->Form->button('Add Comment', ['class' => 'btn btn-default']); ?>
		<?php echo $this->Form->end(); ?>
	</div>
</div>