<<<<<<< HEAD
<div class="meetingPeople form">
<?php echo $this->Form->create('MeetingPerson'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meeting Person'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeetingPerson.id_meeting_people')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MeetingPerson.id_meeting_people'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
=======
<div class="meetingPeople form">
<?php echo $this->Form->create('MeetingPerson'); ?>
	<fieldset>
		<legend><?php echo __('Edit Meeting Person'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeetingPerson.id_meeting_people')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MeetingPerson.id_meeting_people'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
