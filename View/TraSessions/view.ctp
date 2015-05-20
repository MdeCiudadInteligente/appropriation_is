<div class="traSessions view">
<h2><?php echo __('Tra Session'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($traSession['TraSession']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Training'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traSession['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $traSession['Training']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observation'); ?></dt>
		<dd>
			<?php echo h($traSession['TraSession']['observation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($traSession['TraSession']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($traSession['TraSession']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($traSession['TraSession']['end_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tra Session'), array('action' => 'edit', $traSession['TraSession']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tra Session'), array('action' => 'delete', $traSession['TraSession']['id']), null, __('Are you sure you want to delete # %s?', $traSession['TraSession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
