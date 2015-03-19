<div class="divtypes view">
<h2><?php echo __('Tipo de Sensibilización'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($divtype['Divtype']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php //echo __('Site Estado'); ?></dt>
		<dd>
			<?php //echo h($divtype['Divtype']['state']); ?>
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
	   <li><?php echo $this->Html->link(__('Nuevo Tipo Sensibilización'), array('action' => 'add')); ?> </li>
	   <li><?php echo $this->Html->link(__('Editar Tipo Sensibilización'), array('action' => 'edit', $divtype['Divtype']['id'])); ?> </li>
	   <li><?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $divtype['Divtype']['id']), null, __('Are you sure you want to delete # %s?', $divtype['Divtype']['id'])); ?> </li>
	   <?php }?>
	   <li><?php echo $this->Html->link(__('Lista Tipo Sensibilización'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
