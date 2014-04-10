<div class="meetingsPeople index">
	<h2><?php echo __('Meetings People'); ?></h2>
	<table>
	<tr>
			<th><?php echo $this->Paginator->sort('id_meeting_people'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetingsPeople as $meetingsPerson): ?>
	<tr>
		<td><?php echo h($meetingsPerson['MeetingsPerson']['id_meeting_people']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meetingsPerson['Meeting']['id_meeting'], array('controller' => 'meetings', 'action' => 'view', $meetingsPerson['Meeting']['id_meeting'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($meetingsPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $meetingsPerson['Person']['id_person'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meetingsPerson['MeetingsPerson']['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?>
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
		<li><?php echo $this->Html->link(__('New Meetings Person'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
