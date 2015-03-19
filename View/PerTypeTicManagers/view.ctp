<div class="perTypeTicManagers view">
<h2><?php echo __('Per Type Tic Manager'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['profession']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['genre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Workplace'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['workplace']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fund Type'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['fund_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct1'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct2'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct3'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['adjunct3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['schedule']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Person Id'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['type_person_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modification Date'); ?></dt>
		<dd>
			<?php echo h($perTypeTicManager['PerTypeTicManager']['modification_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Per Type Tic Manager'), array('action' => 'edit', $perTypeTicManager['PerTypeTicManager']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Per Type Tic Manager'), array('action' => 'delete', $perTypeTicManager['PerTypeTicManager']['id']), null, __('Are you sure you want to delete # %s?', $perTypeTicManager['PerTypeTicManager']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Type Tic Managers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Type Tic Manager'), array('action' => 'add')); ?> </li>
	</ul>
</div>
