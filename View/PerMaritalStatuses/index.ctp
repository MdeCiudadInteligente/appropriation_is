<div class="perMaritalStatuses index">
	<h2><?php echo __('Per Marital Statuses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perMaritalStatuses as $perMaritalStatus): ?>
	<tr>
		<td><?php echo h($perMaritalStatus['PerMaritalStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($perMaritalStatus['PerMaritalStatus']['name']); ?>&nbsp;</td>
		<td><?php echo h($perMaritalStatus['PerMaritalStatus']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($perMaritalStatus['PerMaritalStatus']['modification_date']); ?>&nbsp;</td>
		<td><?php echo h($perMaritalStatus['PerMaritalStatus']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perMaritalStatus['PerMaritalStatus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perMaritalStatus['PerMaritalStatus']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perMaritalStatus['PerMaritalStatus']['id']), null, __('Are you sure you want to delete # %s?', $perMaritalStatus['PerMaritalStatus']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Per Marital Status'), array('action' => 'add')); ?></li>
	</ul>
</div>
