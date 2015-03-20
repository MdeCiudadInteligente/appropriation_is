<div class="forallies view">
<h2><?php echo __('Forally'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($forally['Forally']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($forally['Forally']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Forally'), array('action' => 'edit', $forally['Forally']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forallies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forally'), array('action' => 'add')); ?> </li>
	</ul>
</div>
