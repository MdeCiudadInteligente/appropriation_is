<div class="siteTypes view">
<h2><?php echo __('Site Type'); ?></h2>
	<dl>
		<dt><?php echo __('Site Type'); ?></dt>
		<dd>
			<?php echo h($siteType['SiteType']['site_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Estado'); ?></dt>
		<dd>
			<?php echo h($siteType['SiteType']['site_estado']); ?>
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
		<li><?php echo $this->Html->link(__('New Site Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Site Type'), array('action' => 'edit', $siteType['SiteType']['id_site_type'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $siteType['SiteType']['id_site_type']), null, __('Are you sure you want to delete # %s?', $siteType['SiteType']['id_site_type'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Site Types'), array('action' => 'index')); ?> </li>
	</ul>
</div>
