<div class="communes view">
<h2><?php echo __('Commune'); ?></h2>
	<dl>
		<dt><?php echo __('Id Commune'); ?></dt>
		<dd>
			<?php echo h($commune['Commune']['id_commune']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commune Name'); ?></dt>
		<dd>
			<?php echo h($commune['Commune']['commune_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commune['Zone']['id_zone'], array('controller' => 'zones', 'action' => 'view', $commune['Zone']['id_zone'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Commune'), array('action' => 'edit', $commune['Commune']['id_commune'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Commune'), array('action' => 'delete', $commune['Commune']['id_commune']), null, __('Are you sure you want to delete # %s?', $commune['Commune']['id_commune'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Neighborhoods'); ?></h3>
	<?php if (!empty($commune['Neighborhood'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Neighborhood'); ?></th>
		<th><?php echo __('Neighborhood Name'); ?></th>
		<th><?php echo __('Commune Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($commune['Neighborhood'] as $neighborhood): ?>
		<tr>
			<td><?php echo $neighborhood['id_neighborhood']; ?></td>
			<td><?php echo $neighborhood['neighborhood_name']; ?></td>
			<td><?php echo $neighborhood['commune_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'neighborhoods', 'action' => 'view', $neighborhood['id_neighborhood'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'neighborhoods', 'action' => 'edit', $neighborhood['id_neighborhood'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'neighborhoods', 'action' => 'delete', $neighborhood['id_neighborhood']), null, __('Are you sure you want to delete # %s?', $neighborhood['id_neighborhood'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
