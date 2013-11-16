<div id="post" style="display: none;">
	<h2><?php echo h($post['Post']['title']); ?></h2>
	<p class="date"><?php echo $this->Time->format('F j, Y', $post['Post']['created']); ?></p>
	<?php echo $this->Geshi->highlight($post['Post']['body']); ?>
</div>