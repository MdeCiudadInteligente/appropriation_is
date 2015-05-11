<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession'); ?>
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
		echo $this->Form->input('start_date',array ('id' => 'datepicker','type'=>'text'));
		echo $this->Form->input('start_time',array('class' => 'printTime'));
		echo $this->Form->input('end_time',array('class' => 'printTime'));
		echo $this->Form->input('observation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
