<div class="trainings form mde-form">
<?php echo $this->Form->create('Training'); ?>
	<fieldset>
		<legend><?php echo __('Add Training'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('activity_place');
		echo $this->Form->input('description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('type_id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('process_id');
		echo $this->Form->input('alliance_id');
		?>
		<div class="seccion-person">	
			<div class="input" >
				<label>Tipo de población</label>
				<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa un tipo de población">
				<div class="results-input" data-input-name="data[Training][population_type_id]" >
					
				</div>
			</div>
		</div>	

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?></li>
	</ul>
</div>
