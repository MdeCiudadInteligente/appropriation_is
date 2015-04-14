<div class="perTrainerFunds view">
<h2><?php echo __('Per Trainer Fund'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perTrainerFund['PerTrainerFund']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perTrainerFund['PerTrainerFund']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perTrainerFund['PerTrainerFund']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perTrainerFund['PerTrainerFund']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perTrainerFund['PerTrainerFund']['modification_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Trainer Fund'), array('action' => 'edit', $perTrainerFund['PerTrainerFund']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Trainer Fund'), array('action' => 'delete', $perTrainerFund['PerTrainerFund']['id']), null, __('Are you sure you want to delete # %s?', $perTrainerFund['PerTrainerFund']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Funds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Fund'), array('action' => 'add')); ?> </li>
	</ul>
</div>
