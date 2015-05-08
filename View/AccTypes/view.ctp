<div class="accTypes view">
<h2><?php echo __('Acc Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accType['AccType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acc Type'), array('action' => 'edit', $accType['AccType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acc Type'), array('action' => 'delete', $accType['AccType']['id']), null, __('Are you sure you want to delete # %s?', $accType['AccType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acc Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acc Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
