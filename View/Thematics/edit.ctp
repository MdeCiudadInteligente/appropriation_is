<div class="thematics form mde-form">
<?php echo $this->Form->create('Thematic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Thematic'); ?></legend>
	<?php		
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('name',array('maxlength'=>'45'));		
		echo $this->Form->input('prefix',array('type'=>'text'));
		echo $this->Form->input('description',array ('type'=>'textarea'));
		echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Thematic'), array('action' => 'add')); ?></li>
	</ul>
</div>
