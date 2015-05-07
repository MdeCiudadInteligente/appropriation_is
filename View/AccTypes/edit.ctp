<div class="accTypes form">
<?php echo $this->Form->create('AccType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Acc Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('state');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AccType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AccType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acc Types'), array('action' => 'index')); ?></li>
	</ul>
</div>
