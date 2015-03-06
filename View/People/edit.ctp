<div class="people form mde-form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Edit Person'); ?></legend>
	<?php
		echo $this->Form->input('id_person',array('type'=>'hidden'));
		echo $this->Form->input('cedula',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('name',array('maxlenght'=>'254'));
		echo $this->Form->input('lastname',array('maxlenght'=>'254'));
		echo $this->Form->input('charge');
		echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
		echo $this->Form->input('phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('cell',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id_person')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id_person'))); ?></li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>

</div>

