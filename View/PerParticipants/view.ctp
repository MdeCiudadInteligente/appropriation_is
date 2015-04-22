<div class="perParticipants view">
<h2><?php echo __('Per Participant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['neighborhood_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Population Type'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['other_population_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Per People Type Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['per_people_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['marital_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Level Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['school_level_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['modification_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['user_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Participant'), array('action' => 'edit', $perParticipant['PerParticipant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Participant'), array('action' => 'delete', $perParticipant['PerParticipant']['id']), null, __('Are you sure you want to delete # %s?', $perParticipant['PerParticipant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Participants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Participant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
