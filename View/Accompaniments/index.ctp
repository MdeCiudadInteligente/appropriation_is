<div class="accompaniments index">
	<h2><?php echo __('Accompaniments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
	        <th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th><?php echo $this->Paginator->sort('accompaniment_date'); ?></th>
			<th><?php echo $this->Paginator->sort('accompaniment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('Descripción'); ?></th>
			<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto1'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto2'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accompaniments as $accompaniment): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($accompaniment['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?>
		</td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_date']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['participant_number']); ?>&nbsp;</td>
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct'])); ?>&nbsp;</td>
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct1'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct1/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct1'])); ?>&nbsp;</td>
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct2'],array('controller' => 'webroot','action' => '/uploads/accompaniment/accompaniment_adjunct2/'.'/'.$accompaniment['Accompaniment']['accompaniment_adjunct2'])); ?>&nbsp;</td>
		
		<!--  <td><?php //echo h($accompaniment['Accompaniment']['adjunct']); ?>&nbsp;</td>-->		
		<td class="actions">
		<?php $usuario_id=$accompaniment['Accompaniment']['user_id'];?>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		
		if(($id_usuario==$usuario_id) || ($usuario_level== '1')){?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	
	<?php echo $this->Form->create('Exportar'); ?>
	<?php echo $this->Form->end(__('Exportar a excel')); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>	
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('action' => 'add')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('Sitios'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
