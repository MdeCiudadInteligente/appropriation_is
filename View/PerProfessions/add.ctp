<div class="perProfessions form">
<?php echo $this->Form->create('PerProfession'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Profession'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('state');
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

		<li><?php echo $this->Html->link(__('List Per Professions'), array('action' => 'index')); ?></li>
	</ul>
</div>
