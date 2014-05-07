<div class="meetingsPeople form">
<?php echo $this->Form->create('MeetingsPerson'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meetings Person'); ?></legend>
	<?php
		echo $this->Form->input('id_meeting_people');
		echo $this->Form->input('meeting_id');
		echo $this->Form->input('person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeetingsPerson.id_meeting_people')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MeetingsPerson.id_meeting_people'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
