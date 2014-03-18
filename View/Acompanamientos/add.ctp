<div class="acompanamientos form">
<?php echo $this->Form->create('Acompanamiento'); ?>
	<fieldset>
		<legend><?php echo __('Add Acompanamiento'); ?></legend>
	<?php
		echo $this->Form->input('id_drc');
		echo $this->Form->input('tipo_acomp');
		echo $this->Form->input('descrp_actividad');
		echo $this->Form->input('nro_participantes');
		echo $this->Form->input('archivo_adjunto');
		echo $this->Form->input('fecha_acompanamiento');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acompanamientos'), array('action' => 'index')); ?></li>
	</ul>
</div>
