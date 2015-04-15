﻿<div class="siteTypes form mde-form">
<?php echo $this->Form->create('SiteType'); ?>
	<fieldset>
		<legend><?php echo __('Add Site Type'); ?></legend>
	<?php		

		echo $this->Form->input('site_type',array('maxlength'=>'45'));		
		echo $this->Form->input('site_estado',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('action' => 'index')); ?></li>		
	</ul>
</div>
