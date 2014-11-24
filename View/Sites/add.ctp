<script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="sites form mde-form">
<?php echo $this->Form->create('Site'); ?>
	<fieldset>
		<legend><?php echo __('Add Site'); ?></legend>
	<?php
		echo $this->Form->input('site_type_id',array('empty'=>'Seleccionar el tipo de sitio'));
		echo $this->Form->input('neighborhood_id',array('empty'=>'Seleccionar el barrio'));
		echo $this->Form->input('site_name',array('maxLength'=>60));
		echo $this->Form->input('site_phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('site_address',array('maxLength'=>80));
		echo $this->Form->input('site_mail',array('maxLength'=>80,'type'=>'email'));
		echo $this->Form->input('syte_estado',array ('options' => array ('Activo'=>'Activo','Inactivo'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Site Types'), array('controller' => 'site_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site Type'), array('controller' => 'site_types', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
