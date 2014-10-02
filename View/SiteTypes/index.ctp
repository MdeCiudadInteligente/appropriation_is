<div class="siteTypes index">
	<h2><?php echo __('Site Types'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('site_type'); ?></th>
			<th><?php echo $this->Paginator->sort('site_estado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($siteTypes as $siteType): ?>
	<tr>
		<td><?php echo h($siteType['SiteType']['site_type']); ?>&nbsp;</td>
		<td><?php echo h($siteType['SiteType']['site_estado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $siteType['SiteType']['id_site_type'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $siteType['SiteType']['id_site_type'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $siteType['SiteType']['id_site_type']), null, __('Are you sure you want to delete # %s?', $siteType['SiteType']['id_site_type'])); ?>
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
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Type'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
