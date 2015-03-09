<div class="users form mde-form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		//echo $this->Form->input('agent_id');
		echo $this->Form->input('id_user');
		echo $this->Form->input('username',array('disabled'=>'true'));
		echo $this->Form->input('password');
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
        <?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
			if ($usuario_level == '1'){?>
        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
        <?php }?>
	</ul>
</div>
