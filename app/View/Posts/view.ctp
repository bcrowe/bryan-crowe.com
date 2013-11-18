<div id="post" style="display: none;">
	<h2><?php echo h($post['Post']['title']); ?></h2>
	<p class="date"><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
	<?php echo $post['Post']['body']; ?>
</div>
<div id="comments">
	<?php
	echo $this->Form->create('Comment', [
		'url'  => '/comments/add',
		'role' => 'form'
	]);
	?>
		<div class="form-group">
			<?php
			echo $this->Form->input('name', [
				'class'       => 'form-control',
				'placeholder' => 'Your Name',
				'label'       => false
			]);
			?>
		</div>
		<div class="form-group">
			<?php
			echo $this->Form->input('email', [
				'class'       => 'form-control',
				'placeholder' => 'E-Mail Address',
				'label'       => false
			]);
			?>
		</div>
		<div class="form-group">
			<?php
			echo $this->Form->input('website', [
				'class'       => 'form-control',
				'placeholder' => 'Website',
				'label'       => false
			]);
			?>
		</div>
		<div class="form-group">
			<?php
			echo $this->Form->input('body', [
				'class'       => 'form-control',
				'rows'        => 5,
				'placeholder' => 'Your comments...',
				'label'       => false
			]);
			?>
		</div>
		<?php echo $this->Form->hidden('post_id', ['value' => $post['Post']['id']]); ?>
		<?php echo $this->Form->button('Add Comment', ['class' => 'btn btn-primary']); ?>
	<?php echo $this->Form->end(); ?>
</div>