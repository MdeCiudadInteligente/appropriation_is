<div class="perTypeTicManagers index">
	<h2><?php echo __('Per Type Tic Managers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('profession'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('genre'); ?></th>
			<th><?php echo $this->Paginator->sort('workplace'); ?></th>
			<th><?php echo $this->Paginator->sort('fund_type'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct1'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct2'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct3'); ?></th>
			<th><?php echo $this->Paginator->sort('dir'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('type_person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perTypeTicManagers as $perTypeTicManager): ?>
	<tr>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['id']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['type']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['profession']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['age']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['genre']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['workplace']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['fund_type']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct1']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct2']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct3']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['dir']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['schedule']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['observations']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['type_person_id']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($perTypeTicManager['PerTypeTicManager']['modification_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perTypeTicManager['PerTypeTicManager']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perTypeTicManager['PerTypeTicManager']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perTypeTicManager['PerTypeTicManager']['id']), null, __('Are you sure you want to delete # %s?', $perTypeTicManager['PerTypeTicManager']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Per Type Tic Manager'), array('action' => 'add')); ?></li>
	</ul>
</div>
