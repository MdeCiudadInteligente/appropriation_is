<div class="meetings index">
	<h2><?php echo __('Prueba'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_meeting'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id_meeting']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['adjunct']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>
