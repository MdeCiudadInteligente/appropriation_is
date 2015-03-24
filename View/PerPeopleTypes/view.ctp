<div class="perPeopleTypes view">
<h2><?php echo __('Per People Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Id'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['person_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per Type Id'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['per_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['modification_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perPeopleType['PerPeopleType']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per People Type'), array('action' => 'edit', $perPeopleType['PerPeopleType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per People Type'), array('action' => 'delete', $perPeopleType['PerPeopleType']['id']), null, __('Are you sure you want to delete # %s?', $perPeopleType['PerPeopleType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per People Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per People Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Per Trainers'); ?></h3>
	<?php if (!empty($perPeopleType['PerTrainer'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Per Trainer Type Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['per_trainer_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Per Profession Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['per_profession_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Per People Type Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['per_people_type_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Per Trainer Fund Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['per_trainer_fund_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Site Id'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['site_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['observations']; ?>
&nbsp;</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
	<?php echo $perPeopleType['PerTrainer']['state']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Per Trainer'), array('controller' => 'per_trainers', 'action' => 'edit', $perPeopleType['PerTrainer']['id'])); ?></li>
			</ul>
		</div>
	</div>
	