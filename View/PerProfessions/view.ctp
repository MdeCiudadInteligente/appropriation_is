<div class="perProfessions view">
<h2><?php echo __('Per Profession'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perProfession['PerProfession']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	   <li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li> 
	   <?php $usuario_level= $this->Session->read('Auth.User.permission_level');
	   if ($usuario_level == '1'){?>
	    <li><?php echo $this->Html->link(__('New Profession'), array('action' => 'add')); ?> </li>
	    <li><?php echo $this->Html->link(__('Edit Profession'), array('action' => 'edit', $perProfession['PerProfession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('action' => 'index')); ?> </li>
		<?php }?>
	</ul>
</div>
