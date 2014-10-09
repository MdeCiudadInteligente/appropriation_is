<div class="sites index">
	<h2><?php echo __('Sites'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_site'); ?></th>
			<th><?php echo $this->Paginator->sort('site_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('neighborhood_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_name'); ?></th>
			<th><?php echo $this->Paginator->sort('site_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('site_address'); ?></th>
			<th><?php echo $this->Paginator->sort('site_mail'); ?></th>
			
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sites as $site): ?>
	<tr>
		<td><?php echo h($site['Site']['id_site']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($site['SiteType']['site_type'], array('controller' => 'site_types', 'action' => 'view', $site['SiteType']['id_site_type'])); ?></td>
		<td><?php echo $this->Html->link($site['Neighborhood']['neighborhood_name'], array('controller' => 'neighborhoods', 'action' => 'view', $site['Neighborhood']['id_neighborhood'])); ?></td>
		<td><?php echo h($site['Site']['site_name']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_phone']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_address']); ?>&nbsp;</td>
		<td><?php echo h($site['Site']['site_mail']); ?>&nbsp;</td>
		
		
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
	<?php echo $this->Form->create('Exportar'); ?>
	<?php echo $this->Form->end(__('Exportar a excel')); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Site Types'), array('controller' => 'site_types', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site Type'), array('controller' => 'site_types', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
