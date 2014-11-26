<div class="agents view">
<h2><?php echo __('Agente Dinamizador'); ?></h2>
	<dl>	
		<dt><?php echo __('Documento Agente'); ?></dt>
		<dd>
			<?php echo h($agent['Person']['cedula']); ?>
			&nbsp;
		</dd>	
		<dt><?php echo __('Agente dinamizador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['Person']['name'].' '.$agent['Person']['lastname'], array('controller' => 'people', 'action' => 'view', $agent['Person']['id_person'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agent['Zone']['id_zone'], array('controller' => 'zones', 'action' => 'view', $agent['Zone']['id_zone'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agent Estado'); ?></dt>
		<dd>
			<?php echo h($agent['Agent']['agent_estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo h($agent['Person']['charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
		<?php echo h($agent['Person']['email']); ?>
		&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($agent['Person']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($agent['Person']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity'); ?></dt>
		<dd>
			<?php echo h($agent['Person']['entity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Agent'), array('action' => 'edit', $agent['Agent']['id_agent'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agent['Agent']['id_agent']), null, __('Are you sure you want to delete # %s?', $agent['Agent']['id_agent'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?> </li>
		
		<li><?php //echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
<?php /*?<div class="related">	
	<?php if (!empty($agent['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id User'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Permission Level'); ?></th>
		<th><?php echo __('Agent Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agent['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id_user']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['permission_level']; ?></td>
			<td><?php echo $user['agent_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id_user'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id_user'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id_user']), null, __('Are you sure you want to delete # %s?', $user['id_user'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div><?php */?>
