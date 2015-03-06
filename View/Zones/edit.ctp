<div class="zones form mde-form">
<?php echo $this->Form->create('Zone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Zone'); ?></legend>
	<?php
		echo $this->Form->input('id_zone');
		echo $this->Form->input('zone_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zone.id_zone')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Zone.id_zone'))); ?></li>
		<li><?php echo $this->Html->link(__('New Zone'), array('action' => 'add')); ?></li>
		<?php }?>
    </ul>
</div>
