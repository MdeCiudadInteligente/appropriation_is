<div class="neighborhoods form mde-form">
<?php echo $this->Form->create('Neighborhood'); ?>
	<fieldset>
		<legend><?php echo __('Edit Neighborhood'); ?></legend>
	<?php
		echo $this->Form->input('id_neighborhood');
		echo $this->Form->input('neighborhood_name',array('maxlength'=>'80'));
		echo $this->Form->input('commune_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Neighborhood.id_neighborhood')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Neighborhood.id_neighborhood'))); ?></li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('action' => 'add')); ?></li>
		<?php }?>
	</ul>
</div>
