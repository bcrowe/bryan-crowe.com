<div id="post" style="display: none;">
	<h2><?php echo h($post['Post']['title']); ?></h2>
	<p class="date"><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
	<?php echo $post['Post']['body']; ?>
</div>
<div id="comments">
	<?php echo $this->Form->create('Comment', ['role' => 'form']); ?>
		<div class="form-group">
			<?php echo $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'Your Name']); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'E-Mail Address']); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('website', ['class' => 'form-control', 'placeholder' => 'Website URL']); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('comments', ['class' => 'form-control', 'rows' => 5, 'placeholder' => 'Your comments...']); ?>
		</div>
		<?php echo $this->Form->button('Add Comment', ['class' => 'btn btn-primary']); ?>
	<?php echo $this->Form->end(); ?>
</div>