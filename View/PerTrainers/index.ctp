<div class="perTrainers index">
	<h2><?php echo __('Per Trainers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_trainer_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_profession_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_people_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_trainer_fund_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perTrainers as $perTrainer): ?>
	<tr>
		<td><?php echo h($perTrainer['PerTrainer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerTrainerType']['name'], array('controller' => 'per_trainer_types', 'action' => 'view', $perTrainer['PerTrainerType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerProfession']['name'], array('controller' => 'per_professions', 'action' => 'view', $perTrainer['PerProfession']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerPeopleType']['id'], array('controller' => 'per_people_types', 'action' => 'view', $perTrainer['PerPeopleType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerTrainerFund']['name'], array('controller' => 'per_trainer_funds', 'action' => 'view', $perTrainer['PerTrainerFund']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $perTrainer['Site']['id_site'])); ?>
		</td>
		<td><?php echo h($perTrainer['PerTrainer']['observations']); ?>&nbsp;</td>
		<td><?php echo h($perTrainer['PerTrainer']['state']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perTrainer['PerTrainer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perTrainer['PerTrainer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perTrainer['PerTrainer']['id']), null, __('Are you sure you want to delete # %s?', $perTrainer['PerTrainer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainer Types'), array('controller' => 'per_trainer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Type'), array('controller' => 'per_trainer_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Professions'), array('controller' => 'per_professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Profession'), array('controller' => 'per_professions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per People Types'), array('controller' => 'per_people_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per People Type'), array('controller' => 'per_people_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Funds'), array('controller' => 'per_trainer_funds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Fund'), array('controller' => 'per_trainer_funds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Schedules'), array('controller' => 'per_trainer_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Schedule'), array('controller' => 'per_trainer_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
