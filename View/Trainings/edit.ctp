<div class="trainings form">
<?php echo $this->Form->create('Training'); ?>
	<fieldset>
		<legend><?php echo __('Edit Training'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('activity_place');
		echo $this->Form->input('description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('type_id');
		echo $this->Form->input('site_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('process_id');
		echo $this->Form->input('alliance_id');
		echo $this->Form->input('population_type_id');
		echo $this->Form->input('creation_date');
		echo $this->Form->input('modification_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Training.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Training.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?></li>
	</ul>
</div>
