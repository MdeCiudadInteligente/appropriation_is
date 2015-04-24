<div class="traSessions form">
<?php echo $this->Form->create('TraSession'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tra Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('training_id');
		echo $this->Form->input('observation');
		echo $this->Form->input('start_date');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraSession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TraSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
