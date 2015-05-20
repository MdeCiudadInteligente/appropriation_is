<div class="traSessionsThematics index">
	<h2><?php echo __('Tra Sessions Thematics'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('session_id'); ?></th>
			<th><?php echo $this->Paginator->sort('thematic_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($traSessionsThematics as $traSessionsThematic): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($traSessionsThematic['TraSession']['id'], array('controller' => 'tra_sessions', 'action' => 'view', $traSessionsThematic['TraSession']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($traSessionsThematic['Thematic']['name'], array('controller' => 'thematics', 'action' => 'view', $traSessionsThematic['Thematic']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $traSessionsThematic['TraSessionsThematic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $traSessionsThematic['TraSessionsThematic']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $traSessionsThematic['TraSessionsThematic']['id']), null, __('Are you sure you want to delete # %s?', $traSessionsThematic['TraSessionsThematic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tra Sessions Thematic'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('controller' => 'tra_sessions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tra Session'), array('controller' => 'tra_sessions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('controller' => 'thematics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Thematic'), array('controller' => 'thematics', 'action' => 'add')); ?> </li>
	</ul>
</div>
