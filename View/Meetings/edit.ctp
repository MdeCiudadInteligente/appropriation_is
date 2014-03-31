<div class="meetings form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Meeting'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_meeting');
		echo $this->Form->input('site_id');
		echo $this->Form->input('meeting_date');
		echo $this->Form->input('meeting_type');
		echo $this->Form->input('meeting_title');
		echo $this->Form->input('meeting_description');
		echo $this->Form->input('meeting_commitments');
		echo $this->Form->input('meeting_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct2',array('type'=>'file'));
<<<<<<< HEAD
		echo $this->Form->input('dir',array('type'=>'hidden'));		
=======
		echo $this->Form->input('dir',array('type'=>'hidden'));
		
>>>>>>> 41151df3955cb0987548c895070de3a2c9b087cb
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Meeting.id_meeting')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Meeting.id_meeting'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>	
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>		
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<!-- <li><?php //echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
