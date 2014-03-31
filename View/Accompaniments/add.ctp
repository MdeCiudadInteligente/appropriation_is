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
  nextText: 'Pr√≥ximo',
  yearRange: "2007:2020",
  monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
  monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
  monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre ann√©e',
  dayNames: ['Domingo','Lunes','Martes','Mi\u00e9rcoles','Jueves','Viernes','S\u00e1bado'],
  dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','S√°b'],
  dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
  dateFormat: 'dd/mm/yy', firstDay: 0,
  initStatus: 'Selecciona la fecha', isRTL: false};
   $.datepicker.setDefaults($.datepicker.regional['es']);
 //miDate: fecha de comienzo D=d√≠as | M=mes | Y=a√±o
 //maxDate: fecha tope D=d√≠as | M=mes | Y=a√±o
    $('#datepicker').datepicker('option', {dateFormat: 'dd/mm/yy'});

});
</script>
 <!--Fin Scripts para el calendario -->
<div class="accompaniments form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar acompaÒamiento'); ?></legend>
	
	<?php
		echo $this->Form->input('site_id');
<<<<<<< HEAD
=======
		echo $this->Form->input('accompaniment_date',array ('id' => 'datepicker'));
>>>>>>> 41151df3955cb0987548c895070de3a2c9b087cb
		echo $this->Form->input('accompaniment_type',array ('options' => array ('practicantes'=>'Practicantes','Estudiantes de PP, jÛvenes por la convivencia o alfabetizadores'=>'Estudiantes de PP, jÛvenes por la convivencia o alfabetizadores' ,
				'Aula Abierta'=>'Aula Abierta','Grados'=>'Grados','Curso, taller o charla'=>'Curso, taller o charla','DiverTIC'=>'DiverTIC','Otros'=>'Otros')));
		echo $this->Form->input('accompaniment_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('participant_number');
		//echo $this->Form->input('adjunct');	
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct2',array('type'=>'file'));
<<<<<<< HEAD
		echo $this->Form->input('dir',array('type'=>'hidden'));	
	?>
=======
		echo $this->Form->input('dir',array('type'=>'hidden'));
		
	?>	
>>>>>>> 41151df3955cb0987548c895070de3a2c9b087cb
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('AcciÛn'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
