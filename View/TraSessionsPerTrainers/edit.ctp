<div class="traSessionsPerTrainers form">
<?php echo $this->Form->create('TraSessionsPerTrainer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tra Sessions Per Trainer'); ?></legend>
	<?php
		echo $this->Form->input('trainer_id');
		echo $this->Form->input('session_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraSessionsPerTrainer.session_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TraSessionsPerTrainer.session_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions Per Trainers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('controller' => 'tra_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('controller' => 'tra_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
