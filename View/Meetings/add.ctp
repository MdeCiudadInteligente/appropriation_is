<!-- Scripts para el calendario -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
  dateFormat: 'yy-mm-dd', firstDay: 0,
  initStatus: 'Selecciona la fecha', isRTL: false};
   $.datepicker.setDefaults($.datepicker.regional['es']);
 //miDate: fecha de comienzo D=dÃ­as | M=mes | Y=aÃ±o
 //maxDate: fecha tope D=dÃ­as | M=mes | Y=aÃ±o
    $('#datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});

});
</script>
 <!--Fin Scripts para el calendario -->
<div class="meetings form mde-form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Meeting'); ?></legend>

	<?php		

		echo $this->Form->input('site_id');		
		echo $this->Form->input('meeting_date',array ('id' => 'datepicker','type'=>'text'));		
		echo $this->Form->input('meeting_type',array ('type'=>'select','options' => array ('Seguimiento'=>'Seguimiento','Gestión con aliados'=>'Gestión con aliados' ,'Empalme'=>'Empalme'),'empty'=>'Seleccione el tipo de reunión'));
		echo $this->Form->input('meeting_title',array('maxlenght'=>'90'));
		//echo $this->Form->input('Person');/*La persona la acbe de agregar*/
		?>

		<div class="seccion-person">	
			<div class="input">
				<label>Personas</label>
				<input type="text" data-service="<?php echo $this->Html->url(array('controller'=>'People','action' => 'favorites', 'ext' => 'json')); ?>" class="person-autocomplete">
				<div class="results-input" data-input-name="data[Person][Person][]">
					
				</div>
			</div>
		</div>	

		<?php
		echo $this->Form->input('meeting_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('meeting_commitments',array ( 'type'=>'textarea'));	
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'/*,'multiple'*/));		
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>
		
		<?php 

		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<!--<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>-->
		<!--<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>-->

		<?php }?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<!--  <li><?php //echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
