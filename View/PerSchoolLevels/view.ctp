<div class="perSchoolLevels view">
<h2><?php echo __('Per School Level'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perSchoolLevel['PerSchoolLevel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perSchoolLevel['PerSchoolLevel']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perSchoolLevel['PerSchoolLevel']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perSchoolLevel['PerSchoolLevel']['modification_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perSchoolLevel['PerSchoolLevel']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per School Level'), array('action' => 'edit', $perSchoolLevel['PerSchoolLevel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per School Level'), array('action' => 'delete', $perSchoolLevel['PerSchoolLevel']['id']), null, __('Are you sure you want to delete # %s?', $perSchoolLevel['PerSchoolLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per School Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per School Level'), array('action' => 'add')); ?> </li>
	</ul>
</div>
