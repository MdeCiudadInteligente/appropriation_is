<div class="forProcesses form mde-form">
<?php echo $this->Form->create('ForProcess'); ?>
	<fieldset>
		<legend><?php echo __('Add For Process'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List For Processes'), array('action' => 'index')); ?></li>
	</ul>
</div>
