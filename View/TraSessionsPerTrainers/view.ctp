<div class="traSessionsPerTrainers view">
<h2><?php echo __('Tra Sessions Per Trainer'); ?></h2>
	<dl>
		<dt><?php echo __('Per Trainer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traSessionsPerTrainer['PerTrainer']['id'], array('controller' => 'per_trainers', 'action' => 'view', $traSessionsPerTrainer['PerTrainer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tra Session'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traSessionsPerTrainer['TraSession']['id'], array('controller' => 'tra_sessions', 'action' => 'view', $traSessionsPerTrainer['TraSession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tra Sessions Per Trainer'), array('action' => 'edit', $traSessionsPerTrainer['TraSessionsPerTrainer']['session_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tra Sessions Per Trainer'), array('action' => 'delete', $traSessionsPerTrainer['TraSessionsPerTrainer']['session_id']), null, __('Are you sure you want to delete # %s?', $traSessionsPerTrainer['TraSessionsPerTrainer']['session_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions Per Trainers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Sessions Per Trainer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('controller' => 'per_trainers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('controller' => 'per_trainers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('controller' => 'tra_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('controller' => 'tra_sessions', 'action' => 'add')); ?> </li>
	</ul>
</div>
