<?php 
$service=Router::url( array('controller' => 'TraSessions', 'action' => 'add_service','?'=>array(
			'training'=>$this->request->data['training']
			)
	),true
);


?>



<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession', array('class'=>'serviceSubmit',"data-service"=>$service)); ?>
	<fieldset>
		<legend><?php echo __('Add Tra Session'); ?></legend>
			<div class="seccion-person">	
				<div class="input">
					<label>Sitio</label>
					<input type="text"  class="Site-autocomplete" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio">
					<div class="results-input-site" data-input-name="data[Site][Site][]">			
					</div>
				</div>
		    </div>		
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

	<?php	
		echo $this->Form->input('observation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
