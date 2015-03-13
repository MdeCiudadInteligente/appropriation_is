<script type="text/javascript">

      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="Thematics form mde-form">
<?php echo $this->Form->create('Thematic'); ?>
	<fieldset>
		<legend><?php echo __('Add Thematics'); ?></legend>
	<?php		
		echo $this->Form->input('name',array('maxlength'=>'45'));		
		echo $this->Form->input('number',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('description',array ('type'=>'textarea'));
		echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('action' => 'index')); ?></li>
	</ul>
</div>
