<div class="perTypeTicManagers form">
<?php echo $this->Form->create('PerTypeTicManager'); ?>
	<fieldset>
		<legend><?php echo __('Edit Per Type Tic Manager'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('profession');
		echo $this->Form->input('age');
		echo $this->Form->input('genre');
		echo $this->Form->input('workplace');
		echo $this->Form->input('fund_type');
		echo $this->Form->input('adjunct');
		echo $this->Form->input('adjunct1');
		echo $this->Form->input('adjunct2');
		echo $this->Form->input('adjunct3');
		echo $this->Form->input('dir');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('schedule');
		echo $this->Form->input('observations');
		echo $this->Form->input('type_person_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PerTypeTicManager.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PerTypeTicManager.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Per Type Tic Managers'), array('action' => 'index')); ?></li>
	</ul>
</div>
