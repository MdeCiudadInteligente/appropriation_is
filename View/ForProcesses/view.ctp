<div class="forProcesses view">
<h2><?php echo __('Training Process'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($forProcess['ForProcess']['name']); ?>
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
	   	<li><?php echo $this->Html->link(__('New Process'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Process'), array('action' => 'edit', $forProcess['ForProcess']['id'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Processes'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
