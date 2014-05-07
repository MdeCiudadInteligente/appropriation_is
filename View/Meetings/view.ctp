<div class="meetings view">
<h2><?php echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Date'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Type'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_type']); ?>
			&nbsp;
		</dd>
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
			<?php echo h($meeting['Meeting']['meeting_adjunct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct1'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_adjunct1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meeting Adjunct2'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['meeting_adjunct2']); ?>
			&nbsp;
		</dd>
			
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Meeting'), array('action' => 'edit', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Meeting'), array('action' => 'delete', $meeting['Meeting']['id_meeting']), null, __('Are you sure you want to delete # %s?', $meeting['Meeting']['id_meeting'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>