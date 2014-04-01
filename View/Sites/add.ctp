<div class="sites form">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php echo __('Add Site'); ?></legend>
	<?php
		echo $this->Form->input('site_type_id');
		echo $this->Form->input('neighborhood_name',array ('options' => array ('La Torre'=>'La Torre','Las Campanas'=>'Las Campanas' ,'La Isla'=>'La Isla','El Playón de los  Comuneros'=>'El Playón de los  Comuneros')));
		echo $this->Form->input('site_name');
		echo $this->Form->input('site_phone');
		echo $this->Form->input('site_address');
		echo $this->Form->input('site_mail');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('controller' => 'site_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Type'), array('controller' => 'site_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
