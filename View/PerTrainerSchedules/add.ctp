<div class="perTrainerSchedules form">
<?php echo $this->Form->create('PerTrainerSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer Schedule'); ?></legend>
	<?php
		echo $this->Form->input('day');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('per_trainer_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('creation_date');
		echo $this->Form->input('modification_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Trainer Schedules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
	</ul>
</div>
