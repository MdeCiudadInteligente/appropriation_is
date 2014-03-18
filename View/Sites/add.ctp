<div class="sites form">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php echo __('Add Site'); ?></legend>
	<?php
		echo $this->Form->input('site_name');
		echo $this->Form->input('site_phone');
		echo $this->Form->input('site_address');
		echo $this->Form->input('site_mail');
		echo $this->Form->input('neighborhood_id');
		echo $this->Form->input('site_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('controller' => 'site_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Type'), array('controller' => 'site_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('controller' => 'accompaniments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('controller' => 'accompaniments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
