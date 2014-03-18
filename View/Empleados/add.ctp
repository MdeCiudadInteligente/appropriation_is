<div class="empleados form">
<?php echo $this->Form->create('Empleado'); ?>
	<fieldset>
		<legend><?php echo __('Add Empleado'); ?></legend>
	<?php
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cargo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('correo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Diariocampos'), array('controller' => 'diariocampos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diariocampo'), array('controller' => 'diariocampos', 'action' => 'add')); ?> </li>
	</ul>
</div>
