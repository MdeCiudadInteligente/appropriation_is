<div class="meeTypes form mde-form">
<?php echo $this->Form->create('MeeType'); ?>
	<fieldset>
		<legend><?php echo __('Add Mee Type'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Mee Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
