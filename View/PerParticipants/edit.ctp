<div class="perParticipants form mde-form">
<?php echo $this->Form->create('PerParticipant'); 	
	$neighborhood=$this->request->data['Neighborhood'];
	$populationTypes=$this->request->data['PopulationType'];
?>
	<fieldset>
		<legend><?php echo __('Edit Per Participant'); ?></legend>
	<?php echo $this->Form->input('id'); ?>
	
	<div class="seccion-person">
		<div class="input">
			<label>Barrio</label>
			<input type="text"  class="Neighborhoods-autocomplete" data-load="true" data-required="true" data-valcontainer=".results-input-neighborhood" data-emptymsg="Por favor ingresa un barrio" data-limit="1">
			<div class="results-input-neighborhood" data-input-name="data[PerParticipant][neighborhood_id]">
				<input type="hidden" name="data[PerParticipant][neighborhood_id]" value="<?php echo $neighborhood['id_neighborhood'] ?>" data-display="<?php echo $neighborhood['neighborhood_name']?>" id="val-input-site-<?php echo $neighborhood['id_neighborhood']?>">
			</div>
		</div>
	</div>
	<div class="seccion-person">	
			<div class="input" >
				<label>Tipo de poblaciÃ³n</label>
				<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-load="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de población">
				<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]" >	
				<?php 
					foreach ($populationTypes as $key => $PopulationType) { ?>
						<input type="hidden" name="data[PopulationType][PopulationType][]" value="<?php echo $PopulationType['id_population_type'] ?>" data-display="<?php echo $PopulationType['name']." ".$PopulationType['name'] ?>" id="val-input-<?php echo $PopulationType['id_population_type']?>">
				<?php } ?>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerParticipant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerParticipant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Participants'), array('action' => 'index')); ?></li>
	</ul>
</div>
