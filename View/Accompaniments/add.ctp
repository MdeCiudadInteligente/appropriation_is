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
<div class="accompaniments form mde-form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar acompañamiento'); ?></legend>
	

	<div class="seccion-person">	
		<div class="input">
			<label>Sitio</label>
			<input type="text"  class="Site-autocomplete" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio">
			<div class="results-input-site" data-input-name="data[Accompaniment][site_id]">			
			</div>
		</div>
	</div>	


	<?php
		echo $this->Form->input('accompaniment_date',array ('id' => 'datepicker','type'=>'text'));			
		echo $this->Form->input('accompaniment_type',array ('type'=>'select','options' => array ('practicantes'=>'Practicantes','Estudiantes de PP, jóvenes por la convivencia o alfabetizadores'=>'Gestores TIC' ,
				'Aula Abierta'=>'Aula Abierta','Grados'=>'Certificación','Curso, taller o charla'=>'Curso, taller','Intervención sitio'=>'Intervención sitio','Laboratorios comunitarios'=>'Laboratorios comunitarios','Estudiantes del Pascual Bravo'=>'Estudiantes del Pascual Bravo','Otros'=>'Otros'),'empty'=>'Seleccione el tipo de acompañamiento'));
		echo $this->Form->input('accompaniment_title',array('maxlenght'=>'90'));
		echo $this->Form->input('accompaniment_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));
		//echo $this->Form->input('adjunct');	
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php 
		echo 'El peso máximo permitido para los archivos adjuntos es de 2 Megas';
		?>
		</div>	
		<?php
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file','allowEmpty' => true));
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file','allowEmpty' => true));
		echo $this->Form->input('accompaniment_adjunct2',array('type'=>'file','allowEmpty' => true));

		echo $this->Form->input('dir',array('type'=>'hidden'));			
	?>	

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>		
	</ul>
</div>
