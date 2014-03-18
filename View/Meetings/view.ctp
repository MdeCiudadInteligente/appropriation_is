<div class="meetings view">
<h2><?php echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['id_meeting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Type'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['adjunct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Meeting People'); ?></h3>
	<?php if (!empty($meeting['MeetingPerson'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Meeting People'); ?></th>
		<th><?php echo __('Meeting Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meeting['MeetingPerson'] as $meetingPerson): ?>
		<tr>
			<td><?php echo $meetingPerson['id_meeting_people']; ?></td>
			<td><?php echo $meetingPerson['meeting_id']; ?></td>
			<td><?php echo $meetingPerson['person_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meeting_people', 'action' => 'view', $meetingPerson['id_meeting_people'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meeting_people', 'action' => 'edit', $meetingPerson['id_meeting_people'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meeting_people', 'action' => 'delete', $meetingPerson['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingPerson['id_meeting_people'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
