<div class="perTrainerSchedules form mde-form">
<?php echo $this->Form->create('PerTrainerSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Edit Per Trainer Schedule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('day',array ('options' => array ('Lunes'=>'Lunes','Martes'=>'Martes','Miércoles'=>'Miércoles','Jueves'=>'Jueves','Viernes'=>'Viernes','Sabado'=>'Sabado','Domingo'=>'Domingo'),'empty'=>'Seleccione el día'));
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	<div class="seccion-person">
			<div class="input">
				<label>Formador</label>
				<div><?php echo $per_trainers_responsefp['personname']; ?></div>
			</div>
	</div>		
	<?php	
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('creation_date');
		//echo $this->Form->input('modification_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerTrainerSchedule.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerTrainerSchedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainer Schedules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
	</ul>
</div>
