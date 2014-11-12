<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>

 <script type="text/javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
</script>
<div class="divulgations form mde-form">
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Divulgation'); ?></legend>
	<?php
		echo $this->Form->input('site_id');

		echo $this->Form->input('divulgation_type',array ('type'=>'select','options' => array ('Activaciones pedagógicas'=>'Activaciones pedagógicas','Intervención de sitios de gobierno'=>'Intervención de sitios de gobierno' ,'Eventos'=>'Eventos','Otros'=>'Otros'),'empty'=>'Seleccione el tipo de divulgación'));
			echo $this->Form->input('divulgation_title',array('maxlenght'=>'90'));
			echo $this->Form->input('divulgation_date',array ('id' => 'datepicker','type'=>'text'));		
			echo $this->Form->input('divulgation_name',array('maxLength'=>'50'));
			echo $this->Form->input('divulgation_description',array ( 'type'=>'textarea'));		
			echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)'));
			echo $this->Form->input('activity_place',array('maxLength'=>'80'));
			echo $this->Form->input('divulgation_adjunct',array('type'=>'file'));
			echo $this->Form->input('divulgation_adjunct1',array('type'=>'file'));
			echo $this->Form->input('divulgation_adjunct2',array('type'=>'file'));

		echo $this->Form->input('dir',array('type'=>'hidden'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<?php //}?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
