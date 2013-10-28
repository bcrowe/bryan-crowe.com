<div class="posts index">
	<?php foreach ($posts as $post): ?>
		<?php //echo h($post['Post']['id']); ?>
		<h2><?php echo h($post['Post']['title']); ?></h2>
		<p><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
		<p><?php echo h($post['Post']['summary']); ?></p>
		<hr>
	<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
