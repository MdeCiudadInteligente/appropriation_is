<div class="perSchoolLevels index">
	<h2><?php echo __('Per School Levels'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perSchoolLevels as $perSchoolLevel): ?>
	<tr>
		<td><?php echo h($perSchoolLevel['PerSchoolLevel']['id']); ?>&nbsp;</td>
		<td><?php echo h($perSchoolLevel['PerSchoolLevel']['name']); ?>&nbsp;</td>
		<td><?php echo h($perSchoolLevel['PerSchoolLevel']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($perSchoolLevel['PerSchoolLevel']['modification_date']); ?>&nbsp;</td>
		<td><?php echo h($perSchoolLevel['PerSchoolLevel']['user_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perSchoolLevel['PerSchoolLevel']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perSchoolLevel['PerSchoolLevel']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perSchoolLevel['PerSchoolLevel']['id']), null, __('Are you sure you want to delete # %s?', $perSchoolLevel['PerSchoolLevel']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Per School Level'), array('action' => 'add')); ?></li>
	</ul>
</div>
