<script type="text/javascript">

      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="people form mde-form">

<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('id_person',array('type'=>'hidden'));
		echo $this->Form->input('cedula',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('name',array('maxLength'=>50));
		echo $this->Form->input('lastname',array('maxLength'=>50));
		echo $this->Form->input('charge',array('maxLength'=>80));
		echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
		echo $this->Form->input('phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('cell',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));
		echo $this->Form->input('genre',array('type'=>'select','options'=> array('1'=>'Femenino','2'=>'Masculino'),'empty'=>'Seleccione Género'));
		echo $this->Form->input('economic_level',array('type'=>'select','options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),'empty'=>'Seleccione Estrato'));
		echo $this->Form->input('birthday',array ('id' => 'datepicker','type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>


