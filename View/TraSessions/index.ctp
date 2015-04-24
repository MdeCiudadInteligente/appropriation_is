<div class="traSessions index">
	<h2><?php echo __('Tra Sessions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('training_id'); ?></th>
			<th><?php echo $this->Paginator->sort('observation'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traSessions as $traSession): ?>
	<tr>
		<td><?php echo h($traSession['TraSession']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($traSession['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $traSession['Training']['id'])); ?>
		</td>
		<td><?php echo h($traSession['TraSession']['observation']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($traSession['TraSession']['modification_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traSession['TraSession']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traSession['TraSession']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traSession['TraSession']['id']), null, __('Are you sure you want to delete # %s?', $traSession['TraSession']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tra Session'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
