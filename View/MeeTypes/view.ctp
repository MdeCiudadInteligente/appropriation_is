<div class="meeTypes view">
<h2><?php echo __('Mee Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($meeType['MeeType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mee Type'), array('action' => 'edit', $meeType['MeeType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mee Type'), array('action' => 'delete', $meeType['MeeType']['id']), null, __('Are you sure you want to delete # %s?', $meeType['MeeType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mee Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mee Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
