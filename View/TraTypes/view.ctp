<div class="traTypes view">
<h2><?php echo __('Training Type'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($traType['TraType']['name']); ?>
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
		<li><?php echo $this->Html->link(__('New Training Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Training Type'), array('action' => 'edit', $traType['TraType']['id'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Training Types'), array('action' => 'index')); ?> </li>
	</ul>
</div>
