<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession'); ?>
	<fieldset>
		<legend><?php echo __('Add Tra Session'); ?></legend>
	
<<<<<<< HEAD
		<div class="seccion-person">	
			<div class="input">
				<label>Formaciones</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-training" data-emptymsg="Por favor ingresa una formación" class="Trainings-autocomplete">
				<div class="results-input-training" data-input-name="data[TraSession][training_id]">			
				</div>
			</div>
		</div>	
=======
			<div class="seccion-person">
				<div class="input" >
					<label>Participante</label>
						<input type="text"  class="Participants-autocomplete" data-required="true" data-valcontainer=".results-input-par" data-emptymsg="Por favor ingresa un participante">
						<div class="results-input-par" data-input-name="data[PerParticipant][PerParticipant][]" >
						</div>
				</div>
			</div>
>>>>>>> d7fbb70c53ccecce5809596b3940c21f9a367cc9
	<?php
		echo $this->Form->input('observation');
		echo $this->Form->input('start_date');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
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

		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
