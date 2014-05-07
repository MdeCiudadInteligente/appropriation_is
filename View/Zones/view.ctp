<div class="zones view">
<h2><?php echo __('Zone'); ?></h2>
	<dl>
		<dt><?php echo __('Id Zone'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['id_zone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone Name'); ?></dt>
		<dd>
			<?php echo h($zone['Zone']['zone_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Zone'), array('action' => 'edit', $zone['Zone']['id_zone'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zone'), array('action' => 'delete', $zone['Zone']['id_zone']), null, __('Are you sure you want to delete # %s?', $zone['Zone']['id_zone'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('controller' => 'communes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
<?php /*
<div class="related">
	<h3><?php echo __('Related Agents'); ?></h3>
	<?php if (!empty($zone['Agent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Agent'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zone['Agent'] as $agent): ?>
		<tr>
			<td><?php echo $agent['id_agent']; ?></td>
			<td><?php echo $agent['person_id']; ?></td>
			<td><?php echo $agent['zone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agents', 'action' => 'view', $agent['id_agent'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agents', 'action' => 'edit', $agent['id_agent'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agents', 'action' => 'delete', $agent['id_agent']), null, __('Are you sure you want to delete # %s?', $agent['id_agent'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Communes'); ?></h3>
	<?php if (!empty($zone['Commune'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Commune'); ?></th>
		<th><?php echo __('Commune Name'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zone['Commune'] as $commune): ?>
		<tr>
			<td><?php echo $commune['id_commune']; ?></td>
			<td><?php echo $commune['commune_name']; ?></td>
			<td><?php echo $commune['zone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'communes', 'action' => 'view', $commune['id_commune'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'communes', 'action' => 'edit', $commune['id_commune'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'communes', 'action' => 'delete', $commune['id_commune']), null, __('Are you sure you want to delete # %s?', $commune['id_commune'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> */ ?>
