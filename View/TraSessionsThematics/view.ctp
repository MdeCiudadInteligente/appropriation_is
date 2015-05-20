<div class="traSessionsThematics view">
<h2><?php echo __('Tra Sessions Thematic'); ?></h2>
	<dl>
		<dt><?php echo __('Tra Session'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traSessionsThematic['TraSession']['id'], array('controller' => 'tra_sessions', 'action' => 'view', $traSessionsThematic['TraSession']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thematic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($traSessionsThematic['Thematic']['name'], array('controller' => 'thematics', 'action' => 'view', $traSessionsThematic['Thematic']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tra Sessions Thematic'), array('action' => 'edit', $traSessionsThematic['TraSessionsThematic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tra Sessions Thematic'), array('action' => 'delete', $traSessionsThematic['TraSessionsThematic']['id']), null, __('Are you sure you want to delete # %s?', $traSessionsThematic['TraSessionsThematic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions Thematics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Sessions Thematic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('controller' => 'tra_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('controller' => 'tra_sessions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('controller' => 'thematics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thematic'), array('controller' => 'thematics', 'action' => 'add')); ?> </li>
	</ul>
</div>
