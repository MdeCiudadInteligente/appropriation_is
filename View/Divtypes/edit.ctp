<div class="divtypes form">
<?php echo $this->Form->create('Divtype'); ?>
	<fieldset>
		<legend><?php echo __('Edit Divtype'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('name');
		echo $this->Form->input('state',array ('label'=>'Estado','options' => array ('1'=>'Activo','0'=>'Inactivo')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	    <li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
	    <li><?php echo $this->Html->link(__('Lista Tipo Divulgación'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Divtype.id')), null, __('Esta seguro que desea eliminar el tipo de divulgación  # %s?', $this->Form->value('Divtype.name'))); ?></li>
		<li><?php echo $this->Html->link(__('New Divtype'), array('action' => 'add')); ?> </li>
		<?php }?>
	</ul>
</div>
