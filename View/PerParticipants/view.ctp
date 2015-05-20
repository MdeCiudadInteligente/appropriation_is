<div class="perParticipants view">
<h2><?php echo __('Participant'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($per_trainers_responsefp['personname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo h($perParticipant['Neighborhood']['neighborhood_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Population Type'); ?></dt>
		<dd>
			<?php echo h($totalpopulationtype); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Population Type'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerParticipant']['other_population_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerMaritalStatus']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('School Level'); ?></dt>
		<dd>
			<?php echo h($perParticipant['PerSchoolLevel']['name']); ?>
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
