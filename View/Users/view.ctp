<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Agent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Agent']['id_agent'], array('controller' => 'agents', 'action' => 'view', $user['Agent']['id_agent'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission Level'); ?></dt>
		<dd>
			<?php echo h($user['User']['permission_level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Estado'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_estado']); ?>
			&nbsp;
		</dd>		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
		if ($usuario_level == '1'){?>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id_user'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id_user']), null, __('Are you sure you want to delete # %s?', $user['User']['id_user'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
	</ul>
</div>
