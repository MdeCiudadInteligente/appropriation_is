<div class="sitesTrainings form">
<?php echo $this->Form->create('SitesTraining'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sites Training'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('training_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SitesTraining.training_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SitesTraining.training_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sites Trainings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
