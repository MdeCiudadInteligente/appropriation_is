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
	$trainers=$this->request->data['trainers'];
	$Thematic=$this->request->data['Thematic'];
	$site=$this->request->data['Site'];
?>	
	<fieldset>
		<legend><?php echo __('Editar Sensibilización'); ?></legend>

		<div class="seccion-person">
		<div class="input">
		<label>Sitio</label>
		<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
		<div class="results-input-site" data-input-name="data[Divulgation][site_id]">
		<input type="hidden" name="data[Divulgation][site_id]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name']?>" id="val-input-site-<?php echo $site['id_site']?>">
		</div>
		</div>
		</div>
	
	<?php
		echo $this->Form->input('id_divulgation');
		echo $this->Form->input('divulgation_date',array ('id' => 'datepicker','type'=>'text','label'=>'Fecha Sensibilización'));
		echo $this->Form->input('divulgation_name',array('maxLength'=>'50','label'=>'Título Sensibilización','OnFocus'=>'this.blur()'));
		echo $this->Form->input('divulgation_type_id',array('empty'=>'Seleccione el tipo de sensibilización','options' => $DivTypes,'label'=>'Tipo Sensibilización'));
		//echo $this->Form->input('divulgation_type',array ('label'=>'Tipo Sensibilización','options' => array ('Activaciones pedagógicas'=>'Activaciones pedagógicas','Intervención de sitios de gobierno'=>'Intervención de sitios de gobierno' ,'Eventos'=>'Eventos','Otros'=>'Otros')));
		echo $this->Form->input('divulgation_description',array ('type'=>'textarea','label'=>'Descripción Sensibilización'));	
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));	
		echo $this->Form->input('population_type_id',array('empty'=>'Seleccione tipo de población'));
	?>
		<div class="input"  style="text-align:right">
		<?php echo $this->Html->link('+ Nuevo formador', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-divulgations seccion-person">	
				<div class="input" >
					<label>Temáticas <i class="icon-eye view-service view-service-button" data-url="<?php echo Router::url( '/', true ) ?>Thematics/getThematic.json" data-callback="appendServiceHtml" data-post="{'a':'1'}" data-name="Temáticas" data-alowedIndex="{'name':'Nombre','prefijo':'prefijo','description':'Descripción'}">Ver temáticas</i></label>
					<input type="text"  class="Thematics-autocomplete" data-required="true" data-load="true" data-valcontainer=".results-input-thematics" data-emptymsg="Por favor ingresa mínimo una temática">
					<div class="results-input-thematics" data-input-name="data[Thematic][Thematic][]">
						<?php 
							foreach ($Thematic as $key => $Thematic) { ?>
								<input type="hidden" name="data[Thematic][Thematic][]" value="<?php echo $Thematic['id'] ?>" data-display="<?php echo $Thematic['name']?>" id="val-input-te-<?php echo $Thematic['id']?>">
						<?php } ?>
					</div>
				</div>
		</div>	
		 <div class="seccion-person">
			<div class="input">
				<label>Formador</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-for" data-emptymsg="Por favor ingresa un tipo de formador" class="Trainers-autocomplete">
				<div class="results-input-for" data-input-name="data[PerTrainer][PerTrainer][]">
				<?php 
					foreach ($trainers as $key => $trainer) { ?>
						<input type="hidden" name="data[PerTrainer][PerTrainer][]" value="<?php echo $trainer['t1']['id'] ?>" data-display="<?php echo $trainer['t3']['name'].' '.$trainer['t3']['lastname'] ?>" id="val-input-tra-<?php echo $trainer['t1']['id']?>">
				<?php } ?>
				</div>
			</div>
	   </div>
	<?php
		echo $this->Form->input('activity_place',array('maxLength'=>'80'));
$druta; $druta=$divulgation['Divulgation']['divulgation_adjunct'];
		$druta1; $druta1=$divulgation['Divulgation']['divulgation_adjunct1'];
		$druta2; $druta2=$divulgation['Divulgation']['divulgation_adjunct2'];
		$idattach; $idattach=$divulgation['Divulgation']['id_divulgation'];
			
			
		$user_id=$divulgation['Divulgation']['user_id'];
		$id_user= $this->Session->read('Auth.User.id_user');
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		
		
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php 
		echo 'El peso máximo permitido para los archivos adjuntos es de 2 Megas';
		?>
		</div>	
		<?php
		echo $this->Form->input('divulgation_adjunct',array('disabled'=>'disabled'));
		?>
				<div class="input textarea required" style="text-align: right;padding-right:36px">
				<?php
				 if(($druta!='') &&($user_id == $id_user || $usuario_level== '1')){
					echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));
				}
				?>
				</div>
				<?php
				echo $this->Form->input('divulgation_adjunct',array('type'=>'file'));
				echo $this->Form->input('divulgation_adjunct1',array('disabled'=>'disabled'));
				?>
				<div class="input textarea required" style="text-align: right;padding-right:36px">
				<?php
				if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){
					echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));
				}
				?>
				</div>
				<?php
				echo $this->Form->input('divulgation_adjunct1',array('type'=>'file'));
				echo $this->Form->input('divulgation_adjunct2',array('disabled'=>'disabled'));
				?>
				<div class="input textarea required" style="text-align: right;padding-right:36px">
				<?php
				if(($druta2!='') &&($user_id == $id_user || $usuario_level== '1')){
					echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));
				}
				?>
				</div>
				<?php
				echo $this->Form->input('divulgation_adjunct2',array('type'=>'file'));
				echo $this->Form->input('dir',array('type'=>'hidden'));

		echo $this->Form->input('dir',array('type'=>'hidden'));	

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Sensibilización'), array('action' => 'index')); ?></li>
	</ul>
</div>
