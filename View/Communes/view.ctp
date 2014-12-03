<div class="communes view">
<h2><?php echo __('Commune'); ?></h2>
	<dl>
		<dt><?php echo __('Commune Name'); ?></dt>
		<dd>
			<?php echo h($commune['Commune']['commune_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commune['Zone']['id_zone'], array('controller' => 'zones', 'action' => 'view', $commune['Zone']['id_zone'])); ?>
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
		<li><?php echo $this->Html->link(__('Edit Commune'), array('action' => 'edit', $commune['Commune']['id_commune'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $commune['Commune']['id_commune']), null, __('Are you sure you want to delete # %s?', $commune['Commune']['id_commune'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Communes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commune'), array('controller' => 'communes', 'action' => 'add')); ?> </li>
        <?php }?>	       
	</ul>
</div>