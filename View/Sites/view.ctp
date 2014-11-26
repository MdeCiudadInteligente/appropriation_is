<div class="sites view">
<h2><?php echo __('Site'); ?></h2>
	<dl>
		<dt><?php echo __('Id Site'); ?></dt>
		<dd>
			<?php echo h($site['Site']['id_site']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['SiteType']['site_type'], array('controller' => 'site_types', 'action' => 'view', $site['SiteType']['id_site_type'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo $this->Html->link($site['Neighborhood']['neighborhood_name'], array('controller' => 'neighborhoods', 'action' => 'view', $site['Neighborhood']['id_neighborhood'])); ?>
			&nbsp;
		</dd>	
		
		<dt><?php echo __('Site Name'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Phone'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Address'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Mail'); ?></dt>
		<dd>
			<?php echo h($site['Site']['site_mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Estado'); ?></dt>
		<dd>
			<?php echo h($site['Site']['syte_estado']); ?>
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
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $site['Site']['id_site']), null, __('Are you sure you want to delete # %s?', $site['Site']['id_site'])); ?> </li>
        <li><?php echo $this->Html->link(__('Editar Sitio'), array('action' => 'edit', $site['Site']['id_site'])); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?> </li>
		<?php }?>
	</ul>
</div>
