<div class="perTrainerFunds form mde-form">
<?php echo $this->Form->create('PerTrainerFund'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer Fund'); ?></legend>
	<?php
		echo $this->Form->input('name');
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('creation_date');
		//echo $this->Form->input('modification_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funds'), array('action' => 'index')); ?></li>
	</ul>
</div>
