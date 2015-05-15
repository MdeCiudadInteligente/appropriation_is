<div class="perMaritalStatuses form mde-form">
<?php echo $this->Form->create('PerMaritalStatus'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Marital Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Marital Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
