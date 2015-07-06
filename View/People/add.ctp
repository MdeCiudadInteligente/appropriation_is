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
		echo $this->Form->input('document_type',array('type'=>'select','options'=>$GLOBALS['STATIC_LIST_ARRAY']['document_type']));
		echo $this->Form->input('cedula',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('name',array('maxLength'=>50));
		echo $this->Form->input('lastname',array('maxLength'=>50));
		echo $this->Form->input('charge',array('maxLength'=>80));
		echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
		echo $this->Form->input('phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('cell',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));
		echo $this->Form->input('genre',array('type'=>'select','options'=> $GLOBALS['STATIC_LIST_ARRAY']['genero'],'empty'=>'Seleccione Género'));
		echo $this->Form->input('economic_level',array('type'=>'select','options'=> $GLOBALS['STATIC_LIST_ARRAY']['estrato'],'empty'=>'Seleccione Estrato'));
		echo $this->Form->input('birthday',array ('id' => 'datepicker','type'=>'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>


