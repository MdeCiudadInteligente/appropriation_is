<div class="owners view">
<h2><?php echo __('Owner'); ?></h2>
	<dl>		
		<dt><?php echo __('Roll'); ?></dt>
		<dd>
			<?php echo h($owner['Owner']['roll']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($owner['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $owner['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo $this->Html->link($owner['Person']['name'], array('controller' => 'people', 'action' => 'view', $owner['Person']['id_person'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($owner['Person']['lastname'], array('controller' => 'people', 'action' => 'view', $owner['Person']['id_person'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>		
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1' || $usuario_level == '2'){?>
		<li><?php echo $this->Html->link(__('New Owner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Owner'), array('action' => 'edit', $owner['Owner']['id_owner'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Owners'), array('action' => 'index')); ?> </li>
	</ul>
</div>
