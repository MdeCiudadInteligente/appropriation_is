<div class="Activities index">
	<h2><?php echo __('Meetings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_meeting'); ?></th>
			<th><?php echo $this->Paginator->sort('meeting_type'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunct'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($meetings as $meeting): ?>
	<tr>
		<td><?php echo h($meeting['Meeting']['id_meeting']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['meeting_type']); ?>&nbsp;</td>
		<td><?php echo h($meeting['Meeting']['adjunct']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?>
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
		<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'Meetings', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('controller' => 'Accompaniments', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'Users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'People', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'Agents', 'action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('New Site Type'), array('controller' => 'SiteTypes', 'action' => 'add')); ?> </li>			
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'Sites', 'action' => 'add')); ?> </li>		
	</ul>
</div>
<div class="agents index">
	<h2><?php echo __('Agents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_agent'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zone_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agents as $agent): ?>
	<tr>
		<td><?php echo h($agent['Agent']['id_agent']); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($agent['Person']['name'], array('controller' => 'people', 'action' => 'view', $agent['Person']['id_person'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agent['Zone']['id_zone'], array('controller' => 'zones', 'action' => 'view', $agent['Zone']['id_zone'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agent['Agent']['id_agent'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agent['Agent']['id_agent'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id_agent']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id_agent'])); ?>
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
<div class="sites index">
	<h2><?php echo __('Sites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_site'); ?></th>
			<th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th><?php echo $this->Paginator->sort('site_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('site_address'); ?></th>
			<th><?php echo $this->Paginator->sort('site_mail'); ?></th>
			<th><?php echo $this->Paginator->sort('neighborhood_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_type_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sites as $site): ?>
	<tr>
		<td><?php echo h($site['Site']['id_site']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_name']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_phone']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_address']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_mail']); ?>&nbsp;</td>		
		<td>
			<?php echo $this->Html->link($site['Neighborhood']['id_neighborhood'], array('controller' => 'neighborhoods', 'action' => 'view', $site['Neighborhood']['id_neighborhood'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($site['SiteType']['id_site_type'], array('controller' => 'site_types', 'action' => 'view', $site['SiteType']['id_site_type'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $site['Site']['id_site'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $site['Site']['id_site'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $site['Site']['id_site']), null, __('Are you sure you want to delete # %s?', $site['Site']['id_site'])); ?>
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



