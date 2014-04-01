<div class="meetings view">
<h2><?php echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
			&nbsp;
		</dd>
<<<<<<< HEAD
=======
		<dt><?php echo __('Meeting Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_date']); ?>
			&nbsp;
		</dd>
>>>>>>> 41151df3955cb0987548c895070de3a2c9b087cb
		<dt><?php echo __('Meeting Title'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Description'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Commitments'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_commitments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct'); ?></dt>
		<dd>
			<?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' =>'/uploads/meeting/meeting_adjunct/'.$meeting['Meeting']['meeting_adjunct'])); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct1'); ?></dt>
		<dd>
			<?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct1'],array('controller' => 'webroot','action' => '/uploads/meeting/meeting_adjunct1/'.$meeting['Meeting']['meeting_adjunct1'])); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct2'); ?></dt>
		<dd>
			<?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct2'],array('controller' => 'webroot','action' => '/uploads/meeting/meeting_adjunct2/'.$meeting['Meeting']['meeting_adjunct2'])); ?> 
			&nbsp;
<<<<<<< HEAD
		</dd>	
=======
		</dd>
>>>>>>> 41151df3955cb0987548c895070de3a2c9b087cb
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Edit Meetings'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meetings'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?> </li>		
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>		
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<!-- <li><?php //echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>-->
	</ul>
</div>

