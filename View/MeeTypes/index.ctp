<div class="meeTypes index">
	<h2><?php echo __('Mee Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('modification_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meeTypes as $meeType): ?>
	<tr>
		<td><?php echo h($meeType['MeeType']['id']); ?>&nbsp;</td>
		<td><?php echo h($meeType['MeeType']['name']); ?>&nbsp;</td>
		<td><?php echo h($meeType['MeeType']['state']); ?>&nbsp;</td>
		<td><?php echo h($meeType['MeeType']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($meeType['MeeType']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($meeType['MeeType']['modification_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeType['MeeType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeType['MeeType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeType['MeeType']['id']), null, __('Are you sure you want to delete # %s?', $meeType['MeeType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mee Type'), array('action' => 'add')); ?></li>
	</ul>
</div>
