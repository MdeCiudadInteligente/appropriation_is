<div class="siteTypes form mde-form">
<?php echo $this->Form->create('SiteType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Site Type'); ?></legend>
	<?php		
		echo $this->Form->input('id_site_type',array('type'=>'hidden'));
		echo $this->Form->input('site_type',array('maxlength'=>'45'));	
		echo $this->Form->input('site_estado',array ('options' => array ('1'=>'Activo','0'=>'Inactivo')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SiteType.id_site_type')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SiteType.id_site_type'))); ?></li>
        <li><?php echo $this->Html->link(__('New Site Type'), array('action' => 'add')); ?></li>
		<?php }?>
	</ul>
</div>
