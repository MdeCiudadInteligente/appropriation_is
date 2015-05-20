<div class="perTrainerSchedules view">
<h2><?php echo __('Per Trainer Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Day'); ?></dt>
		<dd>
			<?php echo h($perTrainerSchedule['PerTrainerSchedule']['day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($perTrainerSchedule['PerTrainerSchedule']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($perTrainerSchedule['PerTrainerSchedule']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainer'); ?></dt>
		<dd>
			<?php //echo $this->Html->link($perTrainerSchedule['PerTrainer']['id'], array('controller' => 'per_trainers', 'action' => 'view', $perTrainerSchedule['PerTrainer']['id'])); ?>
			<?php echo h($per_trainers_responsefp['personname']); ?>
			&nbsp;
		</dd>		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Trainer Schedule'), array('action' => 'edit', $perTrainerSchedule['PerTrainerSchedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Trainer Schedule'), array('action' => 'delete', $perTrainerSchedule['PerTrainerSchedule']['id']), null, __('Are you sure you want to delete # %s?', $perTrainerSchedule['PerTrainerSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
	</ul>
</div>
