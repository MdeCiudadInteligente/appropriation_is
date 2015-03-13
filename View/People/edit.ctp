 <script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="thematic form mde-form">
<?php echo $this->Form->create('Thematic'); ?>
	<fieldset>
		<legend><?php echo __('Edit Thematic'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('name',array('maxlength'=>'45'));
		echo $this->Form->input('number',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
	    echo $this->Form->input('description',array ('type'=>'textarea'));
	    echo $this->Form->input('description',array ('type'=>'textarea'));
	    echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<?php //$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level == '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Thematic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Thematic.id'))); ?></li>
		<?php //}?>
		<li><?php echo $this->Html->link(__('List Thematic'), array('action' => 'index')); ?></li>
	</ul>

</div>

