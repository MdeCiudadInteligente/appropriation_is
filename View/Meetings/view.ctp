<div class="meetings view">
<h2><?php echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Type'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Title'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Description'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Commitments'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_commitments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct'); ?></dt>
		<dd>
		<?php $druta; $druta=$meeting['Meeting']['meeting_adjunct'];
			  $druta1; $druta1=$meeting['Meeting']['meeting_adjunct1'];
		      $druta2; $druta2=$meeting['Meeting']['meeting_adjunct2'];
			  $idattach; $idattach=$meeting['Meeting']['id_meeting'];
			  
			  
			  $user_id=$meeting['Meeting']['user_id'];
			  $id_user= $this->Session->read('Auth.User.id_user');
			  $usuario_level= $this->Session->read('Auth.User.permission_level');
		?>
			<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct/'.$meeting['Meeting']['meeting_adjunct']),array('target'=>'_blank')); ?>&nbsp;</td> 	
			&nbsp;
			<td><?php if(($druta!='') &&($user_id == $id_user || $usuario_level== '1')){ 
				        //echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));
			          } 
			     ?>
			&nbsp;
			</td>
		</dd>
		<dt><?php echo __('Meeting Adjunct1'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct1'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct1/'.$meeting['Meeting']['meeting_adjunct1']),array('target'=>'_blank')); ?>&nbsp;</td>		
			&nbsp;
			<td><?php if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){
						//echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));
					   }
				 ?>
			&nbsp;</td>
		</dd>
		<dt><?php echo __('Meeting Adjunct2'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct2'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct2/'.$meeting['Meeting']['meeting_adjunct2']),array('target'=>'_blank')); ?>&nbsp;</td>
			&nbsp;
			<td><?php if((($druta2!='') &&($user_id == $id_user || $usuario_level== '1'))){
						//echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'meetings', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));
						}?>&nbsp;
			</td>
		</dd>
			
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul><li><?php //echo $this->Html->link(__('Regresar'), array('controller' => 'meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
		if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'){?>	
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Meeting'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
				
	</ul>
</div>