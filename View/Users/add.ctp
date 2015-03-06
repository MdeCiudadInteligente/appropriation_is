<div class="users form mde-form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
 		echo $this->Form->input('agent_id',array('empty'=>'Seleccionar el agente','options' => $agents_name));
		echo $this->Form->input('username',array('maxLength'=>'45'));
		echo $this->Form->input('password',array('maxLength'=>'45'));
		echo $this->Form->input('permission_level',array ('options' => array ('1'=>'Administrador','2'=>'Gestor Cultura Digital','3'=>'Gestores TIC','4'=>'Profesional','5'=>'Líderes'),'empty'=>'Seleccionar el nivel del permiso'));	
		echo $this->Form->input('user_estado',array ('options' => array ('Activo'=>'Activo','Inactivo'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
