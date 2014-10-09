<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Person'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo h($person['Person']['charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
		<?php echo h($person['Person']['email']); ?>
		&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity'); ?></dt>
		<dd>
			<?php echo h($person['Person']['entity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id_person'])); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id_person']), null, __('Are you sure you want to delete # %s?', $person['Person']['id_person'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>

		<?php }?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
