 <script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="divulgations form mde-form">
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar Sensibilización'); ?></legend>

		<div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text"  class="Site-autocomplete" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio">
				<div class="results-input-site" data-input-name="data[Divulgation][site_id]">			
				</div>
			</div>
		</div>	


	<?php  
			echo $this->Form->input('divulgation_date',array ('id' => 'datepicker','type'=>'text','label'=>'Fecha Sensibilización'));
			echo $this->Form->input('divulgation_type_id',array('empty'=>'Seleccione el tipo de sensibilización','options' => $DivTypes,'label'=>'Tipo Sensibilización'));
			echo $this->Form->input('divulgation_description',array ( 'type'=>'textarea','label'=>'Descripción Sensibilización'));		
			echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));
			echo $this->Form->input('population_type_id',array('empty'=>'Seleccione tipo de población'));
	?>
	<div class="seccion-person">	
			<div class="input" >
				<label>Temáticas <i class="icon-eye view-service view-service-button" data-url="<?php echo Router::url( '/', true ) ?>Thematics/getThematic.json" data-callback="appendServiceHtml" data-post="{'a':'1'}" data-name="Temáticas" data-alowedIndex="{'name':'Nombre','prefijo':'prefijo','description':'Descripción'}">Ver temáticas</i></label>
				<input type="text"  class="Thematics-autocomplete" data-required="true" data-valcontainer=".results-input-thematics" data-emptymsg="Por favor ingresa mínimo una temática">
				<div class="results-input-thematics" data-input-name="data[Thematic][Thematic][]">
					
				</div>
			</div>
	</div>	
	<div class="input"  style="text-align:right">
		<?php echo $this->Html->link('+ Nuevo formador', array('controller' => 'PerTrainers', 'action' => 'add'),array('target'=>'_blank')); ?>
	</div>
	<div class="seccion-person">	
			<div class="input" >
				<label>Formador</label>
				<input type="text"  class="Trainers-autocomplete" data-required="true" data-valcontainer=".results-input-tra" data-emptymsg="Por favor ingresa un formador">
				<div class="results-input-tra" data-input-name="data[PerTrainer][PerTrainer][]" >	
				</div>
			</div>
	</div>	
	<?php 		
			echo $this->Form->input('activity_place',array('maxLength'=>'80'));
			?>
			<div class="input textarea required" style="text-align: right;padding-right:36px">
			<?php 
			echo 'El peso máximo permitido para los archivos adjuntos es de 2 Megas';
			?>
			</div>	
			<?php
			echo $this->Form->input('divulgation_adjunct',array('type'=>'file','label'=>'Adjunto Sensibilización'));
			echo $this->Form->input('divulgation_adjunct1',array('type'=>'file','label'=>'Adjunto Sensibilización 1'));
			echo $this->Form->input('divulgation_adjunct2',array('type'=>'file','label'=>'Adjunto Sensibilización 2'));

		echo $this->Form->input('dir',array('type'=>'hidden'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sensibilizaciones'), array('action' => 'index')); ?></li>
		<?php //}?>

	</ul>
</div>
