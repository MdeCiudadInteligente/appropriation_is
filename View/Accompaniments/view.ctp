<div class="accompaniments view">
<h2><?php echo __('Accompaniment'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accompaniment['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Accompaniment Date'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_date']); ?>
			&nbsp;	
		</dd>

		<dt><?php echo __('Accompaniment Type'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accompaniment Description'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['participant_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Accompaniment'), array('action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accompaniment'), array('action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('action' => 'add')); ?> </li>
				<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<?php }?>
	</ul>
</div>
