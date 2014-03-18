<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id Owner'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['id_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Roll'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['roll']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($owner['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $owner['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($owner['Person']['name'], array('controller' => 'people', 'action' => 'view', $owner['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Owner'), array('action' => 'edit', $owner['Owner']['id_owner'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Owner'), array('action' => 'delete', $owner['Owner']['id_owner']), null, __('Are you sure you want to delete # %s?', $owner['Owner']['id_owner'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
