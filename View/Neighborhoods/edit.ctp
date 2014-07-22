<<<<<<< HEAD
﻿<div class="neighborhoods form">
<?php echo $this->Form->create('Neighborhood'); ?>
	<fieldset>
		<legend><?php echo __('Edit Neighborhood'); ?></legend>
	<?php
		echo $this->Form->input('id_neighborhood');
		echo $this->Form->input('neighborhood_name');
		echo $this->Form->input('commune_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Neighborhood.id_neighborhood')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Neighborhood.id_neighborhood'))); ?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
=======
﻿<div class="neighborhoods form">
<?php echo $this->Form->create('Neighborhood'); ?>
	<fieldset>
		<legend><?php echo __('Edit Neighborhood'); ?></legend>
	<?php
		echo $this->Form->input('id_neighborhood');
		echo $this->Form->input('neighborhood_name');
		echo $this->Form->input('commune_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Neighborhood.id_neighborhood')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Neighborhood.id_neighborhood'))); ?></li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
>>>>>>> f88ab0ba3c166edb61bf2c895782b9c1e57fb9e9
