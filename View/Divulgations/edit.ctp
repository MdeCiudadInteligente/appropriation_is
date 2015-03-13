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
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); 
	$currentTraining=$this->request->data['Person'];
?>	
	<fieldset>
		<legend><?php echo __('Editar Sencibilización'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_divulgation');
		echo $this->Form->input('divulgation_date',array ('id' => 'datepicker','type'=>'text','label'=>'Fecha Sencibilización'));
		echo $this->Form->input('divulgation_name',array('maxLength'=>'50','label'=>'Título Sencibilización'));
		echo $this->Form->input('divulgation_type',array ('label'=>'Tipo Sencibilización','options' => array ('Activaciones pedagógicas'=>'Activaciones pedagógicas','Intervención de sitios de gobierno'=>'Intervención de sitios de gobierno' ,'Eventos'=>'Eventos','Otros'=>'Otros')));
		echo $this->Form->input('divulgation_description',array ('type'=>'textarea','label'=>'Descripción Sencibilización'));	
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));	
	?>
		<div class="input"  style="text-align:right">
		<?php echo $this->Html->link('+ Nuevo formador', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-divulgations">	
			<div class="input">
				<label>Formadores</label>
				<input type="text" data-required="true" class="person-autocomplete" data-load="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona" >
				<div class="results-input" data-input-name="data[Person][Person][]">
				<?php 
					foreach ($currentTraining as $key => $Training) { ?>
						<input type="hidden" name="data[Person][Person][]" value="<?php echo $Person['id_person'] ?>" data-display="<?php echo $Person['name']." ".$Person['lastname'] ?>" id="val-input-<?php echo $Person['id_person']?>">
				<?php } ?>
				</div>
			</div>
		</div>	
	<?php
		echo $this->Form->input('activity_place',array('maxLength'=>'80'));
		echo $this->Form->input('divulgation_adjunct',array('disabled'=>'disabled','label'=>'Adjunto Sencibilización'));
		echo $this->Form->input('divulgation_adjunct',array('type'=>'file','label'=>'Adjunto Sencibilización'));
		echo $this->Form->input('divulgation_adjunct1',array('disabled'=>'disabled','label'=>'Adjunto Sencibilización 1'));
		echo $this->Form->input('divulgation_adjunct1',array('type'=>'file','label'=>'Adjunto Sencibilización 1'));
		echo $this->Form->input('divulgation_adjunct2',array('disabled'=>'disabled','label'=>'Adjunto Sencibilización 2'));
		echo $this->Form->input('divulgation_adjunct2',array('type'=>'file','label'=>'Adjunto Sencibilización 2'));

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
		<li><?php echo $this->Html->link(__('Lista Sencibilización'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level === '1'){?>
		<?php //}?>
		
	</ul>
</div>
