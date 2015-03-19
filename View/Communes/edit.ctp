<div class="communes form mde-form">
<?php echo $this->Form->create('Commune'); ?>
	<fieldset>
		<legend><?php echo __('Edit Commune'); ?></legend>
	<?php
		echo $this->Form->input('id_commune');
		echo $this->Form->input('commune_name');
		echo $this->Form->input('zone_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('action' => 'index')); ?></li>
	</ul>
</div>
