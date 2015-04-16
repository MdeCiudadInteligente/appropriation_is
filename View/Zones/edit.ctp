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
    </ul>
</div>
