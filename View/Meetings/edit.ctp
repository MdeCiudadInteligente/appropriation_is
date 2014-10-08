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
<div class="meetings form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Meeting'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_meeting');
		echo $this->Form->input('meeting_date',array ('id' => 'datepicker'));
		echo $this->Form->input('meeting_type',array ('options' => array ('Seguimiento'=>'Seguimiento','Gestión con aliados'=>'Gestión con aliados' ,'Empalme'=>'Empalme')));
		echo $this->Form->input('meeting_title');
		echo $this->Form->input('Person');
		echo $this->Form->input('meeting_description');
		echo $this->Form->input('meeting_commitments');	
		echo $this->Form->input('meeting_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('disabled'=>'disabled'));
		echo $this->Form->input('meeting_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Regresar'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Meeting.id_meeting')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Meeting.id_meeting'))); ?></li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<?php //}?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
