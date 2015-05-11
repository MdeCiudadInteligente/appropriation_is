<!-- Scripts para el calendario -->
<div class="meetings form mde-form">
<?php 
	echo $this->Form->create('Meeting',array('type'=>'file'));
	//debug($this->viewVars);
	$currentPersons=$this->request->data['Person'];
	$site=$this->request->data['Site'];
?>
	<fieldset>
		<legend><?php echo __('Edit Meeting'); ?></legend>
	<?php echo $this->Form->input('id_meeting');?>

	<div class="seccion-person">	
		<div class="input">
			<label>Sitio</label>
			<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
			<div class="results-input-site" data-input-name="data[Meeting][site_id]">
				<input type="hidden" name="data[Meeting][site_id]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name']?>" id="val-input-site-<?php echo $site['id_site']?>">
			</div>
		</div>
	</div>	

	<?php	
		echo $this->Form->input('meeting_date',array ('id' => 'datepicker','type'=>'text'));
		echo $this->Form->input('meeting_type_id',array('empty'=>'Seleccione el tipo de reunión','options' => $meeTypes,'label'=>'Tipo Reunión'));
		echo $this->Form->input('meeting_title',array('maxlenght'=>'90'));?>
	
			<div class="input"  style="text-align:right">
					<?php echo $this->Html->link('+ Nueva persona', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
			</div>
		<div class="seccion-person">	
			<div class="input">
				<label>Personas</label>
				<input type="text" data-required="true" class="person-autocomplete" data-load="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona" >
				<div class="results-input" data-input-name="data[Person][Person][]">
				<?php 
					foreach ($currentPersons as $key => $Person) { ?>
						<input type="hidden" name="data[Person][Person][]" value="<?php echo $Person['id_person'] ?>" data-display="<?php echo $Person['name']." ".$Person['lastname'] ?>" id="val-input-<?php echo $Person['id_person']?>">
				<?php } ?>
				</div>
			</div>
		</div>	
	<?php	
		echo $this->Form->input('meeting_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('meeting_commitments',array ( 'type'=>'textarea'));
		
		$druta; $druta=$meeting['Meeting']['meeting_adjunct'];
		$druta1; $druta1=$meeting['Meeting']['meeting_adjunct1'];
		$druta2; $druta2=$meeting['Meeting']['meeting_adjunct2'];
		$idattach; $idattach=$meeting['Meeting']['id_meeting'];
			
			
		$user_id=$meeting['Meeting']['user_id'];
		$id_user= $this->Session->read('Auth.User.id_user');
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		 <?php 
		  echo 'El peso máximo permitido para los archivos adjuntos es de 2 Megas';
		 ?>
		 </div>	
		<?php
		echo $this->Form->input('meeting_adjunct',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		 if(($druta!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));
		}
		?>
		</div>
		<?php
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct1',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));
		}
		?>
		</div>
		<?php
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		if(($druta2!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));
		}
		?>
		</div>
		<?php
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
</div>
