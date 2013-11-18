<div class="posts form">
<?php echo $this->Form->create('Post', ['role' => 'form']); ?>
	<fieldset>
		<legend><?php echo __('Edit Post'); ?></legend>
	<div class="form-group">
		<?php echo $this->Form->input('title', ['class' => 'form-control']); ?>
	</div>
	<div class="form-group">
		<?php echo $this->Form->input('body', ['class' => 'form-control', 'rows' => 20]); ?>
	</div>
	<?php echo $this->Form->hidden('user_id', ['value' => $user['id']]); ?>
	</fieldset>
	<?php echo $this->Form->button('Edit Post', ['class' => 'btn btn-primary']); ?>
<?php echo $this->Form->end(); ?>
</div>