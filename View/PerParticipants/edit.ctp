<div class="perParticipants mde-form">
<?php echo $this->Form->create('PerParticipant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Per Participant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('neighborhood_id');
		echo $this->Form->input('other_population_type');
		echo $this->Form->input('per_people_type_id');
		echo $this->Form->input('marital_status_id');
		echo $this->Form->input('school_level_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerParticipant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerParticipant.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Participants'), array('action' => 'index')); ?></li>
	</ul>
</div>
