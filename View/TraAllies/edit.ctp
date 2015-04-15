<div class="traAllies form mde-form">
<?php echo $this->Form->create('TraAlly'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ally'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Allies'), array('action' => 'index')); ?></li>
	</ul>
</div>
