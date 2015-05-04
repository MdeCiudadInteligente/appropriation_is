<div class="perParticipantsTrainingSessions form">
<?php echo $this->Form->create('PerParticipantsTrainingSession'); ?>
	<fieldset>
		<legend><?php echo __('Edit Per Participants Training Session'); ?></legend>
	<?php
		echo $this->Form->input('participants_training_id');
		echo $this->Form->input('session_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerParticipantsTrainingSession.n')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerParticipantsTrainingSession.n'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Participants Training Sessions'), array('action' => 'index')); ?></li>
	</ul>
</div>
