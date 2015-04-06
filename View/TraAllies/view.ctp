<div class="traAllies view">
<h2><?php echo __('Ally'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($traAlly['TraAlly']['name']); ?>
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
	  	 <li><?php echo $this->Html->link(__('New Ally'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Ally'), array('action' => 'edit', $traAlly['TraAlly']['id'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Allies'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
