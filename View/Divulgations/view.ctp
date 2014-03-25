<div class="divulgations view">
<h2><?php echo __('Divulgation'); ?></h2>
	<dl>
		<dt><?php echo __('Id Divulgation'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['id_divulgation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divulgation Name'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divulgation Type'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divulgation Description'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['participant_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Place'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['activity_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divulgation Adjunct'); ?></dt>
		<dd>
			<?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct'],array('controller' => 'webroot','action' => $divulgation['Divulgation']['dir'].'/'.$divulgation['Divulgation']['divulgation_adjunct'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($divulgation['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Divulgation'), array('action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Divulgation'), array('action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divulgation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
