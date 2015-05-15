<?php 
	$session=$this->request->data['session'];
	$service=$this->request->data['formService'];
	$participants=$this->request->data['participants'];
?>

<div class="Assist list-rows-style form mde-form">
<?php echo $this->Form->create('TraSession', array('class'=>'serviceSubmit check_submit',"data-service"=>$service)); ?>
	<fieldset>
		<legend><?php echo __('Add Assist'); ?></legend>
		<div class="input-contaniner">
			<div class="check-cont row">
				<div class="col-md-3">
					<label><?php echo __('Name')?></label>
				</div>
				<div class="col-md-3">
					<label><?php echo __('Population Type')?></label>
				</div>
				<div class="col-md-2">
					<label><?php echo __('Neighborhood')?></label>
				</div>
				<div class="col-md-2">
					<label><?php echo __('School Level')?></label>
				</div>
				<div class="col-md-2">
					<label><?php echo __('Assist')?></label>
				</div>
			</div>	
		</div>	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
