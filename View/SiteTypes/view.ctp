<div class="siteTypes view">
<h2><?php echo __('Site Type'); ?></h2>
	<dl>
		<dt><?php echo __('Site Type'); ?></dt>
		<dd>
			<?php echo h($siteType['SiteType']['site_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Estado'); ?></dt>
		<dd>
			<?php echo h($siteType['SiteType']['site_estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li> 
		<li><?php echo $this->Html->link(__('Edit Site Type'), array('action' => 'edit', $siteType['SiteType']['id_site_type'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Site Type'), array('action' => 'delete', $siteType['SiteType']['id_site_type']), null, __('Are you sure you want to delete # %s?', $siteType['SiteType']['id_site_type'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
<?php /*
<div class="related">
	<h3><?php echo __('Related Sites'); ?></h3>
	<?php if (!empty($siteType['Site'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Site'); ?></th>
		<th><?php echo __('Site Name'); ?></th>
		<th><?php echo __('Site Phone'); ?></th>
		<th><?php echo __('Site Address'); ?></th>
		<th><?php echo __('Site Mail'); ?></th>
		<th><?php echo __('Neighborhood Id'); ?></th>
		<th><?php echo __('Site Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($siteType['Site'] as $site): ?>
		<tr>
			<td><?php echo $site['id_site']; ?></td>
			<td><?php echo $site['site_name']; ?></td>
			<td><?php echo $site['site_phone']; ?></td>
			<td><?php echo $site['site_address']; ?></td>
			<td><?php echo $site['site_mail']; ?></td>
			<td><?php echo $site['neighborhood_id']; ?></td>
			<td><?php echo $site['site_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sites', 'action' => 'view', $site['id_site'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sites', 'action' => 'edit', $site['id_site'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sites', 'action' => 'delete', $site['id_site']), null, __('Are you sure you want to delete # %s?', $site['id_site'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> */?>
