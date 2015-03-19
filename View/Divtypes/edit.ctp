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
	    <li><?php echo $this->Html->link(__('Lista Tipo Sensibilización'), array('action' => 'index')); ?></li>		
	</ul>
</div>
