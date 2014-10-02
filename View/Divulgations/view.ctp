<div class="divulgations view">
<h2><?php echo __('Divulgation'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($divulgation['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $divulgation['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Divulgation Date'); ?></dt>
		<dd>
			<?php echo h($divulgation['Divulgation']['divulgation_date']); ?>
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
		<dt><?php echo __('Meeting Adjunct'); ?></dt>
		<dd>
					<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct/'.$divulgation['Divulgation']['divulgation_adjunct'])); ?>&nbsp;</td> 
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct1'); ?></dt>
		<dd>
					<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct1'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct1/'.$divulgation['Divulgation']['divulgation_adjunct1'])); ?>&nbsp;</td> 
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct2'); ?></dt>
		<dd>
			<td><?php echo  $this->Html->link($divulgation['Divulgation']['divulgation_adjunct2'],array('controller' => 'webroot','action' =>'/uploads/divulgation/divulgation_adjunct2/'.$divulgation['Divulgation']['divulgation_adjunct2'])); ?>&nbsp;</td>
			&nbsp;
		</dd>	

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Divulgation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Divulgation'), array('action' => 'edit', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Form->postLink(__('Delete Divulgation'), array('action' => 'delete', $divulgation['Divulgation']['id_divulgation']), null, __('Are you sure you want to delete # %s?', $divulgation['Divulgation']['id_divulgation'])); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?> </li>
		
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		//if ($usuario_level === '1'){?>
		<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<?php //}?>
	</ul>
</div>
