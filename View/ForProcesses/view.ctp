<div class="forProcesses view">
<h2><?php echo __('For Process'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($forProcess['ForProcess']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit For Process'), array('action' => 'edit', $forProcess['ForProcess']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete For Process'), array('action' => 'delete', $forProcess['ForProcess']['id']), null, __('Are you sure you want to delete # %s?', $forProcess['ForProcess']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List For Processes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New For Process'), array('action' => 'add')); ?> </li>
	</ul>
</div>
