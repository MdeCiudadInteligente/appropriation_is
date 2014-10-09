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
<!-- Scripts para el calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
 <script>
 $(function() {
    $( "#datepicker" ).datepicker({
	changeMonth: true,
	changeYear: true
});
	$.datepicker.regional['es'] =
  {
  closeText: 'Fermer',
  prevText: 'Previo',
  nextText: 'PrÃ³ximo',
  yearRange: "2007:2020",
  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
  monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
  monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre annÃ©e',
  dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
  dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','SÃ¡b'],
  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
  dateFormat: 'dd/mm/yy', firstDay: 0,
  initStatus: 'Selecciona la fecha', isRTL: false};
   $.datepicker.setDefaults($.datepicker.regional['es']);
 //miDate: fecha de comienzo D=dÃ­as | M=mes | Y=aÃ±o
 //maxDate: fecha tope D=dÃ­as | M=mes | Y=aÃ±o
    $('#datepicker').datepicker('option', {dateFormat: 'dd/mm/yy'});

});
</script>
 <!--Fin Scripts para el calendario -->
<div class="divulgations form">
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Divulgation'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_divulgation');
		echo $this->Form->input('divulgation_date',array ('id' => 'datepicker'));
		echo $this->Form->input('divulgation_name');
		echo $this->Form->input('divulgation_type',array ('options' => array ('Activaciones pedagógicas'=>'Activaciones pedagógicas','Intervención de sitios de gobierno'=>'Intervención de sitios de gobierno' ,'Eventos'=>'Eventos','Otros'=>'Otros')));
		echo $this->Form->input('divulgation_description');
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('activity_place',array('maxLength'=>'256'));
		echo $this->Form->input('divulgation_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('divulgation_adjunct',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('divulgation_adjunct1',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct2',array('disabled'=>'disabled'));
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
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Divulgation.id_divulgation')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Divulgation.id_divulgation'))); ?></li>
		<?php }?>
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
