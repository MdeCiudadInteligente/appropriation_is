<div class="neighborhoods form">
<?php echo $this->Form->create('Neighborhood'); ?>
	<fieldset>
		<legend><?php echo __('Add Neighborhood'); ?></legend>
	<?php	
		echo $this->Form->input('neighborhood_name',array ('options' => array ('La Torre'=>'La Torre','Las Campanas'=>'Las Campanas' ,'La Isla'=>'La Isla','El Playón de los  Comuneros'=>'El Playón de los  Comuneros')));
		echo $this->Form->input('commune_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
