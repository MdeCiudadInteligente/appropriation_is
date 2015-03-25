<div class="perTypes view">
<h2><?php echo __('Per Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['modification_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Type'), array('action' => 'edit', $perType['PerType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Type'), array('action' => 'delete', $perType['PerType']['id']), null, __('Are you sure you want to delete # %s?', $perType['PerType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Type'), array('action' => 'add')); ?> </li>
	</ul>
</div>
