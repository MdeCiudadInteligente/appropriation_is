<?php 
$service=Router::url( array('controller' => 'TraSessions', 'action' => 'add_service','?'=>array(
			'training'=>$this->request->data['training']
			)
	),true
);


?>



<div class="traSessions  form mde-form">
<?php echo $this->Form->create('TraSession', array('class'=>'serviceSubmit',"data-service"=>$service)); ?>
	<fieldset>
		<legend><?php echo __('Add Tra Session'); ?></legend>
	<?php		
		echo $this->Form->input('start_date',array ('id' => 'datepicker','type'=>'text','class'=>'custom-col','grid'=>'12'));
		echo $this->Form->input('start_time',array('class' => 'printTime populate'));
		echo $this->Form->input('end_time',array('class' => 'printTime'));
	?>	

	<div class="seccion-person">	
			<div class="input" >
				<label>Temáticas</label>
				<input type="text"  class="Thematics-autocomplete" data-required="true" data-valcontainer=".results-input-thematics" data-emptymsg="Por favor ingresa mínimo una temática">
				<div class="results-input-thematics" data-input-name="data[Thematic][Thematic][]">
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
	
	<?php	
		echo $this->Form->input('observation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
