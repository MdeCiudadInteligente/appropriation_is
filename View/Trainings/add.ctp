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


		?>
  <div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete" >
				<div class="results-input-site" data-input-name="data[Site][Site][]" >			
				</div>
			</div>
		</div>
	<?php	
		echo $this->Form->input('process_id');
		//echo $this->Form->input('TraAllies');
	?>
	<div class="seccion-person">	
			<div class="input" >
				<label>Aliados</label>
				<input type="text"  class="TraAllies-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa un aliado">
				<div class="results-input" data-input-name="data[Training][alliance_id]" >
					
				</div>
			</div>
	</div>	
	<div class="seccion-person">	
			<div class="input" >
				<label>Tipo de poblaci�n</label>
				<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa un tipo de poblaci�n">
				<!--  <div class="results-input" data-input-name="data[Training][population_type_id]" >-->
				<div class="results-input" data-input-name="data[Training][Training][]" >	
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
