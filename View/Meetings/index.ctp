<div class="meetings index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_meeting'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_commitments'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_adjunct1'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_adjunct2'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id_meeting']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_title']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_description']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_commitments']); ?>&nbsp;</td>
	
		<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' => $meeting['Meeting']['dir'].'/'.$meeting['Meeting']['meeting_adjunct'])); ?>&nbsp;</td> 	
		<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct1'],array('controller' => 'webroot','action' => $meeting['Meeting']['dir'].'1/'.$meeting['Meeting']['meeting_adjunct1'])); ?>&nbsp;</td>		
		<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct2'],array('controller' => 'webroot','action' => $meeting['Meeting']['dir'].'2/'.$meeting['Meeting']['meeting_adjunct2'])); ?>&nbsp;</td>
		<!--  <td><?php //echo h($meeting['Meeting']['adjunct']); ?>&nbsp;</td>-->
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
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>
	</ul>
</div>
