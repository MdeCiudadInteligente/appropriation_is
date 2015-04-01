<div class="trainings view">
<h2><?php echo __('Training'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($training['Training']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Place'); ?></dt>
		<dd>
			<?php echo h($training['Training']['activity_place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($training['Training']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($training['Training']['participant_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['site_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Process Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['process_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alliance Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['alliance_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Population Type Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['population_type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($training['Training']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($training['Training']['modification_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Training'), array('action' => 'edit', $training['Training']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Training'), array('action' => 'delete', $training['Training']['id']), null, __('Are you sure you want to delete # %s?', $training['Training']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?> </li>
	</ul>
</div>
