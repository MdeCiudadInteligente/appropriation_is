<div class="sites view">
<h2><?php echo __('Site'); ?></h2>
	<dl>
		<dt><?php echo __('Id Site'); ?></dt>
		<dd>
			<?php echo h($site['Site']['id_site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['SiteType']['site_type'], array('controller' => 'site_types', 'action' => 'view', $site['SiteType']['id_site_type'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Neighborhood']['neighborhood_name'], array('controller' => 'neighborhoods', 'action' => 'view', $site['Neighborhood']['id_neighborhood'])); ?>
			&nbsp;
		</dd>	
		
		<dt><?php echo __('Site Name'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Phone'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Address'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Mail'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_mail']); ?>
			&nbsp;
		</dd>
		
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Form->postLink(__('Delete Site'), array('action' => 'delete', $site['Site']['id_site']), null, __('Are you sure you want to delete # %s?', $site['Site']['id_site'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('controller' => 'neighborhoods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('controller' => 'neighborhoods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Types'), array('controller' => 'site_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Type'), array('controller' => 'site_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
<?php /*
<div class="related">
	<h3><?php echo __('Related Accompaniments'); ?></h3>
	<?php if (!empty($site['Accompaniment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Accompaniment'); ?></th>
		<th><?php echo __('Accompaniment Type'); ?></th>
		<th><?php echo __('Accompaniment Description'); ?></th>
		<th><?php echo __('Participant Number'); ?></th>
		<th><?php echo __('Adjunct'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($site['Accompaniment'] as $accompaniment): ?>
		<tr>
			<td><?php echo $accompaniment['id_accompaniment']; ?></td>
			<td><?php echo $accompaniment['accompaniment_type']; ?></td>
			<td><?php echo $accompaniment['accompaniment_description']; ?></td>
			<td><?php echo $accompaniment['participant_number']; ?></td>
			<td><?php echo $accompaniment['adjunct']; ?></td>
			<td><?php echo $accompaniment['site_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accompaniments', 'action' => 'view', $accompaniment['id_accompaniment'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accompaniments', 'action' => 'edit', $accompaniment['id_accompaniment'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accompaniments', 'action' => 'delete', $accompaniment['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['id_accompaniment'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Accompaniment'), array('controller' => 'accompaniments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

<div class="related">
	<h3><?php echo __('Related Meetings'); ?></h3>
	<?php if (!empty($site['Meeting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Meeting'); ?></th>
		<th><?php echo __('Meeting Type'); ?></th>
		<th><?php echo __('Adjunct'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($site['Meeting'] as $meeting): ?>
		<tr>
			<td><?php echo $meeting['id_meeting']; ?></td>
			<td><?php echo $meeting['meeting_type']; ?></td>
			<td><?php echo $meeting['adjunct']; ?></td>
			<td><?php echo $meeting['site_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'meetings', 'action' => 'view', $meeting['id_meeting'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'meetings', 'action' => 'edit', $meeting['id_meeting'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'meetings', 'action' => 'delete', $meeting['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['id_meeting'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Meeting'), array('controller' => 'meetings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Owners'); ?></h3>
	<?php if (!empty($site['Owner'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id Owner'); ?></th>
		<th><?php echo __('Roll'); ?></th>
		<th><?php echo __('Site Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($site['Owner'] as $owner): ?>
		<tr>
			<td><?php echo $owner['id_owner']; ?></td>
			<td><?php echo $owner['roll']; ?></td>
			<td><?php echo $owner['site_id']; ?></td>
			<td><?php echo $owner['person_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'owners', 'action' => 'view', $owner['id_owner'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'owners', 'action' => 'edit', $owner['id_owner'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'owners', 'action' => 'delete', $owner['id_owner']), null, __('Are you sure you want to delete # %s?', $owner['id_owner'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
*/?>