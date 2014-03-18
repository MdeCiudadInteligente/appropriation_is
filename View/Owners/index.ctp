<div class="owners index">
	<h2><?php echo __('Owners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('roll'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($owners as $owner): ?>
	<tr>
		<td><?php echo h($owner['Owner']['id_owner']); ?>&nbsp;</td>
		<td><?php echo h($owner['Owner']['roll']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($owner['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $owner['Site']['id_site'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($owner['Person']['name'], array('controller' => 'people', 'action' => 'view', $owner['Person']['id_person'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $owner['Owner']['id_owner'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $owner['Owner']['id_owner'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $owner['Owner']['id_owner']), null, __('Are you sure you want to delete # %s?', $owner['Owner']['id_owner'])); ?>
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
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
