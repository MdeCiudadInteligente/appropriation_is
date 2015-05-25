<div class="sitesTrainings view">
<h2><?php echo __('Sites Training'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sitesTraining['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $sitesTraining['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Training'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sitesTraining['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $sitesTraining['Training']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sites Training'), array('action' => 'edit', $sitesTraining['SitesTraining']['training_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sites Training'), array('action' => 'delete', $sitesTraining['SitesTraining']['training_id']), null, __('Are you sure you want to delete # %s?', $sitesTraining['SitesTraining']['training_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites Trainings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sites Training'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
