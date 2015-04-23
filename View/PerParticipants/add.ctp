<div class="perParticipants form mde-form">
<?php echo $this->Form->create('PerParticipant'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Participant'); ?></legend>
	<?php
		//echo $this->Form->input('neighborhood_id');
	?>	
		<div class="seccion-person">
			<div class="input">
				<label>Barrio</label>
				<input type="text"  class="Neighborhoods-autocomplete" data-required="true" data-valcontainer=".results-input-neighborhood" data-emptymsg="Por favor ingresa un barrio">
				<div class="results-input-neighborhood" data-input-name="data[PerParticipant][neighborhood_id]">
				</div>
			</div>
		</div>
		
		<div class="seccion-person">	
			<div class="input" >
				<label>Personas</label>
				<input type="text"  class="person-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona">
				<div class="results-input" data-input-name="data[Person][Person][]">
					
				</div>
			</div>
		</div>
		<div class="seccion-person">	
			<div class="input" >
				<label>Tipo de poblaci√≥n</label>
				<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de poblaciÛn">
				<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]" >	
				</div>
		</div>
	</div>		
	<?php	
		echo $this->Form->input('other_population_type');
		//echo $this->Form->input('per_people_type_id');
		echo $this->Form->input('marital_status_id');
		echo $this->Form->input('school_level_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Participants'), array('action' => 'index')); ?></li>
	</ul>
</div>
