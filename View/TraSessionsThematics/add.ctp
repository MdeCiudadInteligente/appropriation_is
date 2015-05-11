<div class="traSessionsThematics form">
<?php echo $this->Form->create('TraSessionsThematic'); ?>
	<fieldset>
		<legend><?php echo __('Add Tra Sessions Thematic'); ?></legend>
	<?php
		echo $this->Form->input('session_id');
		echo $this->Form->input('thematic_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tra Sessions Thematics'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('controller' => 'tra_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('controller' => 'tra_sessions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('controller' => 'thematics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thematic'), array('controller' => 'thematics', 'action' => 'add')); ?> </li>
	</ul>
</div>
