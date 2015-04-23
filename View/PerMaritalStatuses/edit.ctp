<div class="perMaritalStatuses form">
<?php echo $this->Form->create('PerMaritalStatus'); ?>
	<fieldset>
		<legend><?php echo __('Edit Per Marital Status'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('creation_date');
		echo $this->Form->input('modification_date');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerMaritalStatus.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerMaritalStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Marital Statuses'), array('action' => 'index')); ?></li>
	</ul>
</div>
