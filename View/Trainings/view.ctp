<?php
$trainings=$this->request->data['trainings'];
?>
<div class="trainings view">
<h2><?php echo __('Formación'); ?></h2>
	<dl>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($training['Training']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Place'); ?></dt>
		<dd>
			<?php echo h($training['Training']['activity_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($training['Training']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Procesos'); ?></dt>
		<dd>
			<?php echo h($trainings['0']['0']['procesos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos de población'); ?></dt>
		<dd>
			<?php echo h($trainings['0']['0']['poblacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipos de formación'); ?></dt>
		<dd>
			<?php echo h($trainings['0']['t2']['training_type']); ?>
			&nbsp;
		</dd>	 	
		<dt><?php echo __('Aliados'); ?></dt>
		<dd>
			<?php echo h($trainings['0']['0']['aliados']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($training['Training']['current_state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'){?>
		<li><?php echo $this->Html->link(__('Edit training'), array('action' => 'edit', $training['Training']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?> </li>
		<?php }?>
	</ul>
</div>
