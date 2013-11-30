<div id="posts-index" class="table-responsive">
	<table class="table">
		<tr>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($posts as $post): ?>
			<tr>
				<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
				<td><?php echo $this->Time->format('M j, Y', h($post['Post']['created'])); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $post['Post']['id']]); ?>
					<?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $post['Post']['id']], null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<p>
<?php
	echo $this->Paginator->counter([
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	]);
?>
</p>
<div class="paging">
<?php
	echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
	echo $this->Paginator->numbers(['separator' => '']);
	echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
?>
</div>
