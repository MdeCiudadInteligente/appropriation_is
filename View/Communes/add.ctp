<div class="communes form">
<?php echo $this->Form->create('Commune'); ?>
	<fieldset>
		<legend><?php echo __('Add Commune'); ?></legend>
	<?php		
		echo $this->Form->input('commune_name',array ('options' => array ('1 - Popular'=>'1 - Popular','2 - Santa Cruz'=>'2 - Santa Cruz' ,'3 - Manrique'=>'3 - Manrique','4 - Aranjuez'=>'4 - Aranjuez',
		'5 - Castilla'=>'5 - Castilla','6 - Doce De Octubre'=>'6 - Doce De Octubre','7 - Robledo'=>'7 - Robledo','8 - VIlla Hermosa'=>'8 - VIlla Hermosa','9 - Buenos Aires'=>'9 - Buenos Aires',
				'10 - la Candelaria'=>'10 - la Candelaria','11 - Laureles - Estadio'=>'11 - Laureles - Estadio')));
		echo $this->Form->input('zone_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Communes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
	</ul>
</div>
