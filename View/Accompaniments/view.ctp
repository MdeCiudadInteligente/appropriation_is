<div class="accompaniments view">
<h2><?php echo __('Accompaniment'); ?></h2>
	<dl>
		<dt><?php echo __('Id Accompaniment'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['id_accompaniment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accompaniment Type'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accompaniment Description'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['accompaniment_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participant Number'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['participant_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunct'); ?></dt>
		<dd>
			<?php echo h($accompaniment['Accompaniment']['adjunct']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accompaniment['Site']['id_site'], array('controller' => 'sites', 'action' => 'view', $accompaniment['Site']['id_site'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accompaniment'), array('action' => 'edit', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accompaniment'), array('action' => 'delete', $accompaniment['Accompaniment']['id_accompaniment']), null, __('Are you sure you want to delete # %s?', $accompaniment['Accompaniment']['id_accompaniment'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accompaniment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
