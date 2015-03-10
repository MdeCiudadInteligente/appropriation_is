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
		<legend><?php echo __('Edit Site'); ?></legend>
	<?php
		echo $this->Form->input('id_site',array('type'=>'hidden'));
		echo $this->Form->input('site_type_id');
		echo $this->Form->input('neighborhood_id');
		echo $this->Form->input('site_name',array('maxLength'=>60));
		echo $this->Form->input('site_phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('site_address',array('maxLength'=>80));
		echo $this->Form->input('site_mail',array('maxLength'=>80,'type'=>'email'));
		echo $this->Form->input('syte_estado',array ('options' => array ('1'=>'Activo','0'=>'Inactivo')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Site.id_site')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Site.id_site'))); ?></li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?> </li>
        <?php }?>
	</ul>
</div>
