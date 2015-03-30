<div class="perTrainerTypes view">
<h2><?php echo __('Per Trainer Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perTrainerType['PerTrainerType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($perTrainerType['PerTrainerType']['name']); ?>
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
		<li><?php echo $this->Html->link(__('New Trainer Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Trainer Type'), array('action' => 'edit', $perTrainerType['PerTrainerType']['id'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Trainer Types'), array('action' => 'index')); ?> </li>
	</ul>
</div>
