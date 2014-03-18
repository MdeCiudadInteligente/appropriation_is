<div class="accompaniments form">
<?php echo $this->Form->create('Accompaniment'); ?>
	<fieldset>
		<legend><?php echo __('Add Accompaniment'); ?></legend>
	<?php
		echo $this->Form->input('accompaniment_type');
		echo $this->Form->input('accompaniment_description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('adjunct');
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
