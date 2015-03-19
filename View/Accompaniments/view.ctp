<div class="accompaniments view">
<h2><?php echo __('Accompaniment'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accompaniment['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Accompaniment Date'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_date']); ?>
			&nbsp;	
		</dd>

		<dt><?php echo __('Accompaniment Type'); ?></dt>
		<dd>		
			<?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accompaniment Description'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['participant_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accompaniment Adjunct'); ?></dt>
		<dd>
		<?php $druta; $druta=$accompaniment['Accompaniment']['accompaniment_adjunct'];
			  $druta1; $druta1=$accompaniment['Accompaniment']['accompaniment_adjunct1'];
		      $druta2; $druta2=$accompaniment['Accompaniment']['accompaniment_adjunct2'];
			  $idattach; $idattach=$accompaniment['Accompaniment']['id_accompaniment'];
			  
			  
			  $user_id=$accompaniment['Accompaniment']['user_id'];
			  $id_user= $this->Session->read('Auth.User.id_user');
			  $usuario_level= $this->Session->read('Auth.User.permission_level');
		?>
			<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct']),array('target'=>'_blank')); ?>&nbsp;</td>
			&nbsp;
			<td><?php if(($druta!='') &&($user_id == $id_user || $usuario_level== '1')){ 
				        //echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment',$idattach,$druta), null, __('Esta seguro que desea eliminar el archivo %s?',$druta));
			          } 
			     ?>
			&nbsp;
			</td>
		</dd>
		<dt><?php echo __('Accompaniment Adjunct1'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct1'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct1/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct1']),array('target'=>'_blank')); ?>&nbsp;</td>
			&nbsp;
			<td><?php if(($druta1!='') &&($user_id == $id_user || $usuario_level== '1')){
						//echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment1',$idattach,$druta1), null, __('Esta seguro que desea eliminar el archivo %s?',$druta1));
					   }
				 ?>
			&nbsp;</td>
		</dd>
		<dt><?php echo __('Accompaniment Adjunct2'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct2'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct2/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct2']),array('target'=>'_blank')); ?>&nbsp;</td>
			&nbsp;
			<td><?php if((($druta2!='') &&($user_id == $id_user || $usuario_level== '1'))){
						//echo $this->Form->postLink(__('->Eliminar archivo'), array('controller' => 'accompaniments', 'action' => 'delete_attachment2',$idattach,$druta2), null, __('Esta seguro que desea eliminar el archivo %s?',$druta2));
						}?>&nbsp;
			</td>
		</dd>	
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
		if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'){?>
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Accompaniment'), array('action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Accompaniment'), array('action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
			<?php }?>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?> </li>
	</ul>
</div>






