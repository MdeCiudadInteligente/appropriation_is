<div class="meetings view">
<h2><?php echo __('Meeting'); ?></h2>
	<dl>
		<dt><?php echo __('Id Meeting'); ?></dt>
		<dd>
			<?php echo h($meeting['Meeting']['id_meeting']); ?>
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
			<?php echo  $this->Html->link($meeting['Meeting']['meeting_adjunct'],array('controller' => 'webroot','action' => $meeting['Meeting']['dir'].'/'.$meeting['Meeting']['meeting_adjunct'])); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($meeting['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $meeting['Site']['id_site'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>		
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>
	</ul>
</div>

