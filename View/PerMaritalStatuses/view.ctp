<div class="perMaritalStatuses view">
<h2><?php echo __('Per Marital Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perMaritalStatus['PerMaritalStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perMaritalStatus['PerMaritalStatus']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perMaritalStatus['PerMaritalStatus']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perMaritalStatus['PerMaritalStatus']['modification_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perMaritalStatus['PerMaritalStatus']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Marital Status'), array('action' => 'edit', $perMaritalStatus['PerMaritalStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Marital Status'), array('action' => 'delete', $perMaritalStatus['PerMaritalStatus']['id']), null, __('Are you sure you want to delete # %s?', $perMaritalStatus['PerMaritalStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Marital Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Marital Status'), array('action' => 'add')); ?> </li>
	</ul>
</div>
