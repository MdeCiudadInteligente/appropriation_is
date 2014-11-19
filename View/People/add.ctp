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
		echo $this->Form->input('cedula',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('name',array('maxLength'=>50));
		echo $this->Form->input('lastname',array('maxLength'=>50));
		echo $this->Form->input('charge',array('maxLength'=>80));
		echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
		echo $this->Form->input('phone',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('cell',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('entity',array('maxLength'=>80));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>

		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<!--  <li><?php //echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>-->
		<!-- <li><?php //echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>-->
		<!-- <li><?php //echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>-->
		<!-- <li><?php //echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>-->
		<?php }?>

		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>


