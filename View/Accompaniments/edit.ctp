<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>
<!-- Scripts para el calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
 <script>
 <script type="text/javascript">
 function validarEmail(valor) {
	 var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
  } else {
   alert("La dirección de correo es incorrecta.");
   document.getElementById("InscriptionRepresentativeMail").focus();
   return false;
  }
  return true;
}
 </script> 
 <script type="text/javascript">
 function validarCorreo(valor) {
	 var filter=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(valor)){
  } else {
   alert("La dirección de correo es incorrecta.");
   document.getElementById("InscriptionContanctMail").focus();
   return false;
  }
  return true;
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
<div class="accompaniments form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Accompaniment'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_accompaniment');
		echo $this->Form->input('accompaniment_date',array ('id' => 'datepicker'));
		echo $this->Form->input('accompaniment_type',array ('options' => array ('practicantes'=>'Practicantes','Estudiantes de PP, jóvenes por la convivencia o alfabetizadores'=>'Estudiantes de PP, jóvenes por la convivencia o alfabetizadores' ,
				'Aula Abierta'=>'Aula Abierta','Grados'=>'Grados','Curso, taller o charla'=>'Curso, taller o charla','DiverTIC'=>'DiverTIC','Otros'=>'Otros')));
		echo $this->Form->input('accompaniment_description',array ( 'type'=>'textarea'));
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)'));
		echo $this->Form->input('accompaniment_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct2',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct2',array('type'=>'file'));
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
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Accompaniment.id_accompaniment')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Accompaniment.id_accompaniment'))); ?></li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>		
		<?php 
		//$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>		

		<?php //}?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
