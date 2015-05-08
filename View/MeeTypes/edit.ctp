<div class="meeTypes form mde-form">
<?php echo $this->Form->create('MeeType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mee Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MeeType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('MeeType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mee Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
