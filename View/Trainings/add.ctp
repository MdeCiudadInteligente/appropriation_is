 <script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="trainings form mde-form">
<?php echo $this->Form->create('Training'); ?>
	<fieldset>
		<legend><?php echo __('Add Training'); ?></legend>
	<?php
		echo $this->Form->input('activity_place');
		echo $this->Form->input('description');
		//echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));
		echo $this->Form->input('type_id',array('empty'=>'Seleccione el tipo de formación'));


		?>
  <div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-site" data-limit="100" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete" >
				<div class="results-input-site" data-input-name="data[Site][Site][]" >			
				</div>
			</div>
		</div>
	<?php	
		//echo $this->Form->input('process_id');
		//echo $this->Form->input('TraAllies');
	?>
	<div class="seccion-person">	
			<div class="input" >
				<label>Procesos</label>
				<input type="text"  class="TraProcesses-autocomplete" data-required="true" data-valcontainer=".results-input-pro" data-emptymsg="Por favor ingresa un proceso">
				<div class="results-input-pro" data-input-name="data[TraProcess][TraProcess][]" >
					
				</div>
			</div>
	</div>	
	
	<div class="seccion-person">	
			<div class="input" >
				<label>Aliados</label>
				<input type="text"  class="TraAllies-autocomplete" data-required="true" data-valcontainer=".results-input-ally" data-emptymsg="Por favor ingresa un aliado">
				<div class="results-input-ally" data-input-name="data[TraAlly][TraAlly][]" >
					
				</div>
			</div>
	</div>	
	<div class="seccion-person">	
			<div class="input" >
				<label>Tipo de población</label>
				<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de poblaci�n">
				<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]" >	
				</div>
			</div>
	</div>	
	<div class="seccion-person">	
			<div class="input" >
				<label>Formador</label>
				<input type="text"  class="Trainers-autocomplete" data-required="true" data-valcontainer=".results-input-tra" data-emptymsg="Por favor ingresa un formador">
				<div class="results-input-tra" data-input-name="data[PerTrainer][PerTrainer][]" >	
				</div>
			</div>
	</div>	

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?></li>
	</ul>
</div>
