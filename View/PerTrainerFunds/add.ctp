<div class="perTrainerFunds form">
<?php echo $this->Form->create('PerTrainerFund'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer Fund'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('creation_date');
		echo $this->Form->input('modification_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Trainer Funds'), array('action' => 'index')); ?></li>
	</ul>
</div>
