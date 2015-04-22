<div class="perParticipants index">
	<h2><?php echo __('Per Participants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('neighborhood_id'); ?></th>
			<th><?php echo $this->Paginator->sort('other_population_type'); ?></th>
			<th><?php echo $this->Paginator->sort('per_people_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('marital_status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('school_level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perParticipants as $perParticipant): ?>
	<tr>
		<td><?php echo h($perParticipant['PerParticipant']['id']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['neighborhood_id']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['other_population_type']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['per_people_type_id']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['marital_status_id']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['school_level_id']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['modification_date']); ?>&nbsp;</td>
		<td><?php echo h($perParticipant['PerParticipant']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perParticipant['PerParticipant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perParticipant['PerParticipant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perParticipant['PerParticipant']['id']), null, __('Are you sure you want to delete # %s?', $perParticipant['PerParticipant']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Per Participant'), array('action' => 'add')); ?></li>
	</ul>
</div>
