<div class="divulgations index">
	<h2><?php echo __('Divulgations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_divulgation'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_name'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_type'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_description'); ?></th>
			<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_place'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divulgations as $divulgation): ?>
	<tr>
		<td><?php echo h($divulgation['Divulgation']['id_divulgation']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_name']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_type']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_description']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['participant_number']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['activity_place']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['adjunct']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($divulgation['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?>
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
		<li><?php echo $this->Html->link(__('New Divulgation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
