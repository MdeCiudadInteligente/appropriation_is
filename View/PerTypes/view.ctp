<div class="perTypes view">
<h2><?php echo __('Per Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perType['PerType']['name']); ?>
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
	    <li><?php echo $this->Html->link(__('New Per Type'), array('action' => 'add')); ?> </li>	
		<li><?php echo $this->Html->link(__('Edit Per Type'), array('action' => 'edit', $perType['PerType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Types'), array('action' => 'index')); ?> </li>
		<?php }?>
	</ul>
</div>
