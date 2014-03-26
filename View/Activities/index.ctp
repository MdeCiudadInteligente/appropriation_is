<div class="Activities index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_meeting'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_title'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_description'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_commitments'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id_meeting']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_title']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_description']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_commitments']); ?>&nbsp;</td>
		<!-- <td><?php //echo h($meeting['Meeting']['meeting_adjunct']); ?>&nbsp;</td>-->
		<td><?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' => $meeting['Meeting']['dir'].'/'.$meeting['Meeting']['meeting_adjunct'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'Meetings','action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'Meetings','action' => 'edit', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Meetings','action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Está seguro de que desea eliminar # %s?', $meeting['Meeting']['id_meeting'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<?php
	$usuario_level= $this->Session->read('Auth.User.permission_level');
	if ($usuario_level === '2'||$usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'Meetings', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('controller' => 'Accompaniments', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Divulgation'), array('controller' => 'Divulgations', 'action' => 'add')); ?> </li>	
	<?php }?>
	<?php if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'Users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'People', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'Agents', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Site Type'), array('controller' => 'SiteTypes', 'action' => 'add')); ?> </li>			
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'Sites', 'action' => 'add')); ?> </li>	
	<?php }?>	
	</ul>
</div>


<div class="accompaniments index">
	<h2><?php echo __('Accompaniments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_accompaniment'); ?></th>
			<th><?php echo $this->Paginator->sort('accompaniment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('accompaniment_description'); ?></th>
			<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accompaniments as $accompaniment): ?>
	<tr>
		<td><?php echo h($accompaniment['Accompaniment']['id_accompaniment']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>&nbsp;</td>
		<td><?php echo h($accompaniment['Accompaniment']['participant_number']); ?>&nbsp;</td>
		<!--  <td><?php //echo h($accompaniment['Accompaniment']['accompaniment_adjunct']); ?>&nbsp;</td>-->
		<td><?php echo  $this->Html->link($accompaniment['Accompaniment']['accompaniment_adjunct'],array('controller' => 'webroot','action' => $accompaniment['Accompaniment']['dir'].'/'.$accompaniment['Accompaniment']['accompaniment_adjunct'])); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accompaniment['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?>
		</td>
		<td class="actions">		
			<?php echo $this->Html->link(__('View'), array('controller' => 'Accompaniments','action' => 'view', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'Accompaniments','action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Accompaniments','action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

<div class="divulgations index">
	<h2><?php echo __('Divulgations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_divulgation'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_name'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_type'); ?></th>
			<th><?php echo $this->Paginator->sort('divulgation_description'); ?></th>
			<th><?php echo $this->Paginator->sort('participant_number'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_place'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($divulgations as $divulgation): ?>
	<tr>
		<td><?php echo h($divulgation['Divulgation']['id_divulgation']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_name']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_type']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['divulgation_description']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['participant_number']); ?>&nbsp;</td>
		<td><?php echo h($divulgation['Divulgation']['activity_place']); ?>&nbsp;</td>
	<!--  	<td><?php //echo h($divulgation['Divulgation']['divulgation_adjunct']); ?>&nbsp;</td>-->
	<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct'],array('controller' => 'webroot','action' => $divulgation['Divulgation']['dir'].'/'.$divulgation['Divulgation']['divulgation_adjunct'])); ?>&nbsp;</td> 
		<td>
			<?php echo $this->Html->link($divulgation['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller' => 'Divulgations','action' => 'view', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller' => 'Divulgations','action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Divulgations','action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>



