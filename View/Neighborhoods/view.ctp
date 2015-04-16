<div class="neighborhoods view">
<h2><?php echo __('Neighborhood'); ?></h2>
	<dl>
		<dt><?php echo __('Neighborhood Name'); ?></dt>
		<dd>
			<?php echo h($neighborhood['Neighborhood']['neighborhood_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commune'); ?></dt>
		<dd>
			<?php echo $this->Html->link($neighborhood['Commune']['commune_name'], array('controller' => 'communes', 'action' => 'view', $neighborhood['Commune']['id_commune'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Neighborhoods'), array('action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Html->link(__('Edit Neighborhood'), array('action' => 'edit', $neighborhood['Neighborhood']['id_neighborhood'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $neighborhood['Neighborhood']['id_neighborhood']), null, __('Are you sure you want to delete # %s?', $neighborhood['Neighborhood']['id_neighborhood'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Neighborhood'), array('action' => 'add')); ?> </li>
		<?php }?>		
	</ul>
</div>