<<<<<<< HEAD
<div class="meetingPeople view">
<h2><?php echo __('Meeting Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting People'); ?></dt>
		<dd>
			<?php echo h($meetingPerson['MeetingPerson']['id_meeting_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingPerson['Meeting']['id_meeting'], array('controller' => 'meetings', 'action' => 'view', $meetingPerson['Meeting']['id_meeting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $meetingPerson['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting Person'), array('action' => 'edit', $meetingPerson['MeetingPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting Person'), array('action' => 'delete', $meetingPerson['MeetingPerson']['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingPerson['MeetingPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
=======
<div class="meetingPeople view">
<h2><?php echo __('Meeting Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting People'); ?></dt>
		<dd>
			<?php echo h($meetingPerson['MeetingPerson']['id_meeting_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingPerson['Meeting']['id_meeting'], array('controller' => 'meetings', 'action' => 'view', $meetingPerson['Meeting']['id_meeting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $meetingPerson['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meeting Person'), array('action' => 'edit', $meetingPerson['MeetingPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting Person'), array('action' => 'delete', $meetingPerson['MeetingPerson']['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingPerson['MeetingPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
