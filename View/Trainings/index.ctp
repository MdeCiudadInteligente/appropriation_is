<div class="trainings index">
	<h2><?php echo __('Trainings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_place'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('process_id'); ?></th>
			<th><?php echo $this->Paginator->sort('alliance_id'); ?></th>
			<th><?php echo $this->Paginator->sort('population_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trainings as $training): ?>
	<tr>
		<td><?php echo h($training['Training']['id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['code']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['activity_place']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['description']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['participant_number']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['type_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['site_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['process_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['alliance_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['population_type_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['modification_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $training['Training']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $training['Training']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $training['Training']['id']), null, __('Are you sure you want to delete # %s?', $training['Training']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?></li>
	</ul>
</div>
