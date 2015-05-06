<div class="perTrainerSchedules form mde-form">
<?php echo $this->Form->create('PerTrainerSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer Schedule'); ?></legend>
	<?php
		echo $this->Form->input('day',array ('options' => array ('Lunes'=>'Lunes','Martes'=>'Martes','Miércoles'=>'Miércoles','Jueves'=>'Jueves','Viernes'=>'Viernes','Sabado'=>'Sabado','Domingo'=>'Domingo'),'empty'=>'Seleccione el día'));
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>	
		<div class="seccion-person">
		<div class="input" >
		<label>Formador</label>
		<input type="text"  class="Trainers-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa una formador" data-limit="1">
		<div class="results-input" data-input-name="data[PerTrainerSchedule][per_trainer_id]" >
			
		</div>
		</div>
		</div>
	<?php //echo $this->Form->input('per_trainer_id');
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
