<div class="divulgations view">
<h2><?php echo __('Sensibilización'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>		
		<dd>
			<?php echo $this->Html->link($divulgation['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Sensibilización'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Sensibilización'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Sensibilización'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción Sensibilización'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['participant_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Place'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['activity_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto Sensibilización'); ?></dt>
		<dd>
		<?php $druta; $druta=$divulgation['Divulgation']['divulgation_adjunct'];
			  $druta1; $druta1=$divulgation['Divulgation']['divulgation_adjunct1'];
		      $druta2; $druta2=$divulgation['Divulgation']['divulgation_adjunct2'];
			  $idattach; $idattach=$divulgation['Divulgation']['id_divulgation'];
			  
			  
			  $user_id=$divulgation['Divulgation']['user_id'];
			  $id_user= $this->Session->read('Auth.User.id_user');
			  $usuario_level= $this->Session->read('Auth.User.permission_level');
		?>
		<td><?php echo $this->Html->link($divulgation['Divulgation']['divulgation_adjunct'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct/'.$divulgation['Divulgation']['divulgation_adjunct']),array('target'=>'_blank')); ?>
		&nbsp;</td> 
		&nbsp;
		<td><?php if(($druta != '') &&($user_id == $id_user || $usuario_level == '1'))
		{ ?>
			<?php //echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));?>
		
		<?php }  ?>
			&nbsp;
			</td>
		</dd>		
		<dt><?php echo __('Adjunto Sensibilización 1'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct1'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct1/'.$divulgation['Divulgation']['divulgation_adjunct1']),array('target'=>'_blank')); ?>&nbsp;</td> 
			&nbsp;
			<td><?php if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){?>
				<?php //echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));?>
			<?php  } ?>
			&nbsp;</td>
		</dd>
		<dt><?php echo __('Adjunto Sensibilización 2'); ?></dt>
		<dd>
		<?php 
		
		?>
		<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct2'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct2/'.$divulgation['Divulgation']['divulgation_adjunct2']),array('target'=>'_blank')); ?>&nbsp;</td>
		&nbsp;
		<td><?php if((($druta2!='') &&($user_id == $id_user || $usuario_level== '1'))){?>
			<?php //echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'divulgations', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));?>
		<?php }?>
		&nbsp;

		</td>
		</dd>		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');	
		if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'){?>
		<li><?php echo $this->Html->link(__('Nueva Sensibilización'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Editar Sensibilización'), array('action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<?php }?>
		<?php if ($usuario_level == '1'){?>
		<li><?php echo $this->Form->postLink(__('Eliminar Sensibilización'), array('action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('Lista Sensibilizaciones'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
