<div class="siteTypes form">
<?php echo $this->Form->create('SiteType'); ?>
	<fieldset>
		<legend><?php echo __('Add Site Type'); ?></legend>
	<?php		

		echo $this->Form->input('site_type',array('maxlength'=>'45'));		
		echo $this->Form->input('site_estado',array ('options' => array ('Activo'=>'Activo','Inactivo'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
