<<<<<<< HEAD
<div class="meetingsPeople view">
<h2><?php echo __('Meetings Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting People'); ?></dt>
		<dd>
			<?php echo h($meetingsPerson['MeetingsPerson']['id_meeting_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsPerson['Meeting']['id_meeting'], array('controller' => 'meetings', 'action' => 'view', $meetingsPerson['Meeting']['id_meeting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $meetingsPerson['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meetings Person'), array('action' => 'edit', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meetings Person'), array('action' => 'delete', $meetingsPerson['MeetingsPerson']['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
=======
<div class="meetingsPeople view">
<h2><?php echo __('Meetings Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting People'); ?></dt>
		<dd>
			<?php echo h($meetingsPerson['MeetingsPerson']['id_meeting_people']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsPerson['Meeting']['id_meeting'], array('controller' => 'meetings', 'action' => 'view', $meetingsPerson['Meeting']['id_meeting'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meetingsPerson['Person']['name'], array('controller' => 'people', 'action' => 'view', $meetingsPerson['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Meetings Person'), array('action' => 'edit', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meetings Person'), array('action' => 'delete', $meetingsPerson['MeetingsPerson']['id_meeting_people']), null, __('Are you sure you want to delete # %s?', $meetingsPerson['MeetingsPerson']['id_meeting_people'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meetings Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
