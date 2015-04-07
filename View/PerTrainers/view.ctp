<div class="perTrainers view">
<h2><?php echo __('Trainer'); ?></h2>
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
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li> 
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
	   	if ($usuario_level == '1'){?>
	   	<li><?php echo $this->Html->link(__('New Trainer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Trainer'), array('action' => 'edit', $perTrainer['PerTrainer']['id'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Trainers'), array('action' => 'index')); ?> </li>
	</ul>
</div>

