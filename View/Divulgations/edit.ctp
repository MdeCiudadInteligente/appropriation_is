<div class="divulgations form">
<?php echo $this->Form->create('Divulgation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Divulgation'); ?></legend>
	<?php
		echo $this->Form->input('id_divulgation');
		echo $this->Form->input('divulgation_name');
		echo $this->Form->input('divulgation_type');
		echo $this->Form->input('divulgation_description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('activity_place');
		echo $this->Form->input('adjunct');
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Divulgation.id_divulgation')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Divulgation.id_divulgation'))); ?></li>
		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
