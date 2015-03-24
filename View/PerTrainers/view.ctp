<div class="perTrainers view">
<h2><?php echo __('Per Trainer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perTrainer['PerTrainer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per Trainer Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perTrainer['PerTrainerType']['name'], array('controller' => 'per_trainer_types', 'action' => 'view', $perTrainer['PerTrainerType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per Profession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perTrainer['PerProfession']['name'], array('controller' => 'per_professions', 'action' => 'view', $perTrainer['PerProfession']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per People Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perTrainer['PerPeopleType']['id'], array('controller' => 'per_people_types', 'action' => 'view', $perTrainer['PerPeopleType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per Trainer Fund'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perTrainer['PerTrainerFund']['name'], array('controller' => 'per_trainer_funds', 'action' => 'view', $perTrainer['PerTrainerFund']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($perTrainer['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $perTrainer['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($perTrainer['PerTrainer']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($perTrainer['PerTrainer']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Trainer'), array('action' => 'edit', $perTrainer['PerTrainer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Trainer'), array('action' => 'delete', $perTrainer['PerTrainer']['id']), null, __('Are you sure you want to delete # %s?', $perTrainer['PerTrainer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Per Trainer Schedules'); ?></h3>
	<?php if (!empty($perTrainer['PerTrainerSchedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Per Trainer Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Creation Date'); ?></th>
		<th><?php echo __('Modification Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perTrainer['PerTrainerSchedule'] as $perTrainerSchedule): ?>
		<tr>
			<td><?php echo $perTrainerSchedule['id']; ?></td>
			<td><?php echo $perTrainerSchedule['name']; ?></td>
			<td><?php echo $perTrainerSchedule['state']; ?></td>
			<td><?php echo $perTrainerSchedule['per_trainer_id']; ?></td>
			<td><?php echo $perTrainerSchedule['user_id']; ?></td>
			<td><?php echo $perTrainerSchedule['creation_date']; ?></td>
			<td><?php echo $perTrainerSchedule['modification_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'per_trainer_schedules', 'action' => 'view', $perTrainerSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'per_trainer_schedules', 'action' => 'edit', $perTrainerSchedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'per_trainer_schedules', 'action' => 'delete', $perTrainerSchedule['id']), null, __('Are you sure you want to delete # %s?', $perTrainerSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Per Trainer Schedule'), array('controller' => 'per_trainer_schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
