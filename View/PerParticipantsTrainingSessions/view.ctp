<div class="perParticipantsTrainingSessions view">
<h2><?php echo __('Per Participants Training Session'); ?></h2>
	<dl>
		<dt><?php echo __('Participants Training Id'); ?></dt>
		<dd>
			<?php echo h($perParticipantsTrainingSession['PerParticipantsTrainingSession']['participants_training_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Session Id'); ?></dt>
		<dd>
			<?php echo h($perParticipantsTrainingSession['PerParticipantsTrainingSession']['session_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Participants Training Session'), array('action' => 'edit', $perParticipantsTrainingSession['PerParticipantsTrainingSession']['n'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Participants Training Session'), array('action' => 'delete', $perParticipantsTrainingSession['PerParticipantsTrainingSession']['n']), null, __('Are you sure you want to delete # %s?', $perParticipantsTrainingSession['PerParticipantsTrainingSession']['n'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Participants Training Sessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Participants Training Session'), array('action' => 'add')); ?> </li>
	</ul>
</div>
