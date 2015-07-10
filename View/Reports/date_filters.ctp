
	<?php 
		$target_service=$this->request->data['service'];
	?>


	<div class=" form mde-form">
		<form action="<?php echo $target_service ?>" method="POST" target="_blank">
			<fieldset>
				<legend><?php echo __('Fechas'); ?></legend>
					<?php
						echo $this->Form->input('start_date',array ('type'=>'text','class'=>'custom-col datepickerMDE','data-grid'=>'6','required'=>'required'));
						echo $this->Form->input('end_date',array ('type'=>'text','class'=>'custom-col datepickerMDE','data-grid'=>'6','required'=>'required'));
					?>
			</fieldset>
			<?php echo $this->Form->end(__('Generar Informe')); ?>
		</form>
	</div>

