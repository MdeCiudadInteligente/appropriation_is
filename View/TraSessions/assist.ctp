<?php 
	$session=$this->request->data['session'];
	$service=$this->request->data['formService'];
	$participants=(isset($this->request->data['participants']))?$this->request->data['participants']:array();
?>

<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession', array('class'=>'serviceSubmit check_submit',"data-service"=>$service)); ?>
	<fieldset>
		<legend><?php echo __('Actualizar Asistencia'); ?></legend>
		<div class="input-contaniner">
			<div class="check-cont row header-row">
				<div class="col-md-3 col-sm-4 col-xs-10">
					<label><?php echo __('Name')?></label>
				</div>
				<div class="col-md-3 col-sm-4 hidden-xs ">
					<label><?php echo __('Population Type')?></label>
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<label><?php echo __('Neighborhood')?></label>
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<label><?php echo __('School Level')?></label>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
					<label><?php echo __('Asiste')?></label>
				</div>
			</div>	

			<?php foreach ($participants as $key => $value) { 
				$assist=(isset($value['assist']))?'checked="checked"':'';
			?>	
				<div class="check-cont row">
					<div class="col-md-3 col-sm-4 col-xs-10">
						<label><?php echo  $value['person_name'] ?></label>
					</div>
					<div class="col-md-3 col-sm-4 hidden-xs ">
						<label><?php echo  $value['population_types']?></label>
					</div>
					<div class="col-md-2 hidden-sm hidden-xs">
						<label><?php echo  $value['neighborhood_name']?></label>
					</div>
					<div class="col-md-2 hidden-sm hidden-xs">
						<label><?php echo $value['school_level']?></label>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2 assist-input">
						<input class="input-check-data" <?php echo $assist ?> type="checkbox" name="data[IdPerParticipantsTraining][]" value="<?php echo $value['id']?>">
					</div>
				</div>	
			<?php } ?>


		</div>	
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
