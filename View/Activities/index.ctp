<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1'){?>		
<?php //echo "Bienvenido:". $name_usuario;?>
<div class="Activities index">
	<h2><?php echo __('Meetings'); ?></h2>
	<div id="paginador1">
	<table>

	<tr>
		<th><?php echo $this->Paginator->sort('site_id'); ?></th>
		<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
		<th><?php echo $this->Paginator->sort('meeting_title'); ?></th>
	<?php /*	<th><?php echo $this->Paginator->sort('meeting_description'); ?></th>
		<th><?php echo $this->Paginator->sort('meeting_commitments'); ?></th>
	
		<th><?php echo $this->Paginator->sort('meeting_adjunct'); ?></th>
		<th><?php echo $this->Paginator->sort('meeting_adjunct1'); ?></th>
		<th><?php echo $this->Paginator->sort('meeting_adjunct2'); ?></th> */?>
		

	<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?></td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_title']); ?>&nbsp;</td>
		<?php /*	<td><?php echo h($meeting['Meeting']['meeting_description']); ?>&nbsp;</td>  */?>
		<?php /*<td><?php echo h($meeting['Meeting']['meeting_commitments']); ?>&nbsp;</td>  */?>
		<!-- <td><?php //echo h($meeting['Meeting']['meeting_adjunct']); ?>&nbsp;</td>-->
	<?php /*	<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct/'.$meeting['Meeting']['meeting_adjunct'])); ?>&nbsp;</td> 
		<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct1'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct1/'.$meeting['Meeting']['meeting_adjunct1'])); ?>&nbsp;</td>		
	<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct2'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct2/'.$meeting['Meeting']['meeting_adjunct2'])); ?>&nbsp;</td>  */?>
		<td class="ver">  		
			<?php //echo $this->Html->link(__('View'), array('controller' => 'Meetings','action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		</td>
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('controller' => 'Meetings','action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');?>			
		<?php //echo "Nivel". $usuario_level;?>
		<?php $usuario_id=$meeting['Meeting']['user_id'];?>		
		<?php //echo "usuario". $usuario_id;?>
		<?php //echo $this->Html->link(__('View'), array('controller' => 'Meetings','action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		<?php if(($id_usuario==$usuario_id) || ($usuario_level== '1')){?>
		<?php //echo $this->Html->link(__('View'), array('controller' => 'Meetings','action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
		<?php echo $this->Html->link(__('Edit'), array('controller' => 'Meetings','action' => 'edit', $meeting['Meeting']['id_meeting'])); ?>
		<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Meetings','action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Está seguro de que desea eliminar # %s?', $meeting['Meeting']['id_meeting'])); ?>
		<?php }?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, empezando en el registro {:start}, que concluye el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		/*echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
	</div>
	<?php echo $this->Html->link(__('Ver más'), array('controller' => 'Meetings', 'action' => 'index')); ?>
</div>
<?php }?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	<li><?php //echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>

	<?php	
	$usuario_level= $this->Session->read('Auth.User.permission_level');
	
	if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1'){?>		

		<li><?php echo $this->Html->link(__('Reuniones'), array('controller' => 'Meetings', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Acompañamientos'), array('controller' => 'Accompaniments', 'action' => 'index')); ?> </li>	
	<?php }?>
	<li><?php echo $this->Html->link(__('Divulgaciones'), array('controller' => 'Divulgations', 'action' => 'index')); ?> </li>	

	<?php //if ($usuario_level == '1'){?>
    	<li><?php echo $this->Html->link(__('Configuración'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'Users', 'action' => 'add')); ?> </li>		
		<li><?php //echo $this->Html->link(__('New Agent'), array('controller' => 'Agents', 'action' => 'add')); ?> </li>	
		<li><?php //echo $this->Html->link(__('New Site Type'), array('controller' => 'SiteTypes', 'action' => 'add')); ?> </li>			
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'Sites', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Neighborhood'), array('controller' => 'Neighborhoods', 'action' => 'add')); ?> </li>	
		<li><?php //echo $this->Html->link(__('New Commune'), array('controller' => 'Communes', 'action' => 'add')); ?> </li>		
	<?php //}?>	
	<li><?php //echo $this->Html->link(__('New Person'), array('controller' => 'People', 'action' => 'add')); ?> </li>	

	<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>


<div class="accompaniments index">
<?php if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1'){?>		
	<h2><?php echo __('Accompaniments'); ?></h2>
	<table>
	<tr>
		<th><?php echo $this->Paginator->sort('site_id'); ?></th>
		<th><?php echo $this->Paginator->sort('accompaniment_type'); ?></th> 
	<?php /*	<th><?php echo $this->Paginator->sort('accompaniment_description'); ?></th>  */?>
		<th><?php echo $this->Paginator->sort('participant_number'); ?></th>

		<?php /*	<th><?php echo $this->Paginator->sort('accompaniment_adjunct'); ?></th>
		<th><?php echo $this->Paginator->sort('accompaniment_adjunct1'); ?></th>
		<th><?php echo $this->Paginator->sort('accompaniment_adjunct2'); ?></th> */?>
	

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accompaniments as $accompaniment): ?>
	<tr>
	<td><?php echo $this->Html->link($accompaniment['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?></td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>&nbsp;</td>
	<?php /*	<td><?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>&nbsp;</td> */?>
		<td><?php echo h($accompaniment['Accompaniment']['participant_number']); ?>&nbsp;</td>
		<!--  <td><?php //echo h($accompaniment['Accompaniment']['accompaniment_adjunct']); ?>&nbsp;</td>-->
	<?php /*	<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct'])); ?>&nbsp;</td>
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct1'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct1/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct1'])); ?>&nbsp;</td>
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct2'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct2/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct2'])); ?>&nbsp;</td> */?>
		<td class="ver">  		
			<?php //echo $this->Html->link(__('View'), array('controller' => 'Accompaniments','action' => 'view', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
		</td>
		<td class="actions">	
		<?php echo $this->Html->link(__('View'), array('controller' => 'Accompaniments','action' => 'view', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
		<?php $usuario_id=$accompaniment['Accompaniment']['user_id'];?>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		
		if(($id_usuario==$usuario_id) || ($usuario_level== '1')){?>	
			<?php //echo $this->Html->link(__('View'), array('controller' => 'Accompaniments','action' => 'view', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'Accompaniments','action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Accompaniments','action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
		<?php }?>
		</td>
	</tr>
<?php endforeach; ?>
	<?php }?>
	</table>

	<p>
	<?php
	echo $this->Paginator->counter(array(
	//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, empezando en el registro {:start}, que concluye el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
	/*	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
	<?php echo $this->Html->link(__('Ver más'), array('controller' => 'Accompaniments', 'action' => 'index')); ?>
</div>

<div class="divulgations index">
	<h2><?php echo __('Divulgations'); ?></h2>
	<table>
	<tr>
		<th><?php echo $this->Paginator->sort('site_id'); ?></th>
		<th><?php echo $this->Paginator->sort('divulgation_name'); ?></th>
		<th><?php echo $this->Paginator->sort('divulgation_type'); ?></th>
		<?php /*	<th><?php echo $this->Paginator->sort('divulgation_description'); ?></th>
		<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
		<th><?php echo $this->Paginator->sort('activity_place'); ?></th>  

		<th><?php echo $this->Paginator->sort('divulgation_adjunct'); ?></th>
		<th><?php echo $this->Paginator->sort('divulgation_adjunct1'); ?></th>
		<th><?php echo $this->Paginator->sort('divulgation_adjunct2'); ?></th> 	*/?>
		

		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divulgations as $divulgation): ?>
	<tr>
		<td><?php echo $this->Html->link($divulgation['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?></td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_name']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_type']); ?>&nbsp;</td>
		<?php /*	<td><?php echo h($divulgation['Divulgation']['divulgation_description']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['participant_number']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['activity_place']); ?>&nbsp;</td>
	<!--  	<td><?php //echo h($divulgation['Divulgation']['divulgation_adjunct']); ?>&nbsp;</td>-->
	    <td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct/'.$divulgation['Divulgation']['divulgation_adjunct'])); ?>&nbsp;</td> 
		<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct1'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct1/'.$divulgation['Divulgation']['divulgation_adjunct1'])); ?>&nbsp;</td> 
		<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct2'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct2/'.$divulgation['Divulgation']['divulgation_adjunct2'])); ?>&nbsp;</td> */?>
			
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('controller' => 'Divulgations','action' => 'view', $divulgation['Divulgation']['id_divulgation'])); ?>
		<?php $usuario_id=$divulgation['Divulgation']['user_id'];?>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		
		if(($id_usuario==$usuario_id) || ($usuario_level== '1')){?>	
			<?php //echo $this->Html->link(__('View'), array('controller' => 'Divulgations','action' => 'view', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'Divulgations','action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Divulgations','action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php }?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	//'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registros de {:count} total, empezando en el registro {:start}, que concluye el {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
	/*	echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
	<?php echo $this->Html->link(__('Ver más'), array('controller' => 'Divulgations', 'action' => 'index')); ?>
</div>
<?php echo $this->Js->writeBuffer(); ?>


