<div class="fortypes view">
<h2><?php echo __('Fortype'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fortype['Fortype']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fortype['Fortype']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fortype'), array('action' => 'edit', $fortype['Fortype']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fortypes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fortype'), array('action' => 'add')); ?> </li>
	</ul>
</div>
