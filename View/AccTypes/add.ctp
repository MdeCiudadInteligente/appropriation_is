<div class="accTypes form mde-form">
<?php echo $this->Form->create('AccType'); ?>
	<fieldset>
		<legend><?php echo __('Add Acc Type'); ?></legend>
	<?php
		echo $this->Form->input('name');		
		echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acc Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
