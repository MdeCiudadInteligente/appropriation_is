<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>
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

<div class="accompaniments form mde-form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file'));
$site=$this->request->data['Site'];
?>
	<fieldset>
		<legend><?php echo __('Edit Accompaniment'); ?></legend>
	
		<div class="seccion-person">
		<div class="input">
		<label>Sitio</label>
		<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
		<div class="results-input-site" data-input-name="data[Accompaniment][site_id]">
		<input type="hidden" name="data[Accompaniment][site_id]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name']?>" id="val-input-site-<?php echo $site['id_site']?>">
		</div>
		</div>
		</div>
		<?php
		echo $this->Form->input('id_accompaniment');
		echo $this->Form->input('accompaniment_date',array ('id' => 'datepicker','type'=>'text'));
		echo $this->Form->input('accompaniment_type',array ('options' => array ('practicantes'=>'Practicantes','Estudiantes de PP, jóvenes por la convivencia o alfabetizadores'=>'Estudiantes de PP, jóvenes por la convivencia o alfabetizadores' ,
				'Aula Abierta'=>'Aula Abierta','Grados'=>'Grados','Curso, taller o charla'=>'Curso, taller o charla','DiverTIC'=>'DiverTIC','Laboratorios comunitarios'=>'Laboratorios comunitarios','Estudiantes del pascual bravo'=>'Estudiantes del pascual bravo','Otros'=>'Otros')));
		echo $this->Form->input('accompaniment_title',array('maxlenght'=>'90'));
		echo $this->Form->input('accompaniment_description',array ( 'type'=>'textarea'));
		echo $this->Form->input('participant_number',array('onkeypress'=>'return isNumberKey(event)','type'=>'text'));
		
		$druta; $druta=$accompaniment['Accompaniment']['accompaniment_adjunct'];
		$druta1; $druta1=$accompaniment['Accompaniment']['accompaniment_adjunct1'];
		$druta2; $druta2=$accompaniment['Accompaniment']['accompaniment_adjunct2'];
		$idattach; $idattach=$accompaniment['Accompaniment']['id_accompaniment'];
			
			
		$user_id=$accompaniment['Accompaniment']['user_id'];
		$id_user= $this->Session->read('Auth.User.id_user');
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		
		
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php 
		echo 'El peso máximo permitido para los archivos adjuntos es de 2 Megas';
		?>
		</div>	
		<?php
		echo $this->Form->input('accompaniment_adjunct',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		 if(($druta!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));
		}
		?>
		</div>
		<?php
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct1',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));
		}
		?>
		</div>
		<?php
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct2',array('disabled'=>'disabled'));
		?>
		<div class="input textarea required" style="text-align: right;padding-right:36px">
		<?php
		if(($druta2!='') &&($user_id == $id_user || $usuario_level== '1')){
			echo $this->Html->Link(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));
		}
		?>
		</div>
		<?php
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
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>				
	</ul>
</div>
