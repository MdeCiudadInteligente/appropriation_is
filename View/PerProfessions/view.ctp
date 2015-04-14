<div class="perProfessions view">
<h2><?php echo __('Per Profession'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['modification_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Profession'), array('action' => 'edit', $perProfession['PerProfession']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Profession'), array('action' => 'delete', $perProfession['PerProfession']['id']), null, __('Are you sure you want to delete # %s?', $perProfession['PerProfession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Professions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Profession'), array('action' => 'add')); ?> </li>
	</ul>
</div>
