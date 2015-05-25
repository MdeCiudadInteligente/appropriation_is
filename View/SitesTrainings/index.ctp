<div class="sitesTrainings index">
	<h2><?php echo __('Sites Trainings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('training_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sitesTrainings as $sitesTraining): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($sitesTraining['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $sitesTraining['Site']['id_site'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sitesTraining['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $sitesTraining['Training']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sitesTraining['SitesTraining']['training_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sitesTraining['SitesTraining']['training_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sitesTraining['SitesTraining']['training_id']), null, __('Are you sure you want to delete # %s?', $sitesTraining['SitesTraining']['training_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sites Training'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
