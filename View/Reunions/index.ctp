<div class="reunions index">
	<h2><?php echo __('Reunions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idreunion'); ?></th>
			<th><?php echo $this->Paginator->sort('id_drcp'); ?></th>
			<th><?php echo $this->Paginator->sort('tiporeunion'); ?></th>
			<th><?php echo $this->Paginator->sort('nombreasistentes'); ?></th>
			<th><?php echo $this->Paginator->sort('entidad'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto1'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto2'); ?></th>
			<th><?php echo $this->Paginator->sort('adjunto3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reunions as $reunion): ?>
	<tr>
		<td><?php echo h($reunion['Reunion']['idreunion']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['id_drcp']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['tiporeunion']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['nombreasistentes']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['entidad']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['correo']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['adjunto1']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['adjunto2']); ?>&nbsp;</td>
		<td><?php echo h($reunion['Reunion']['adjunto3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reunion['Reunion']['idreunion'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reunion['Reunion']['idreunion'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reunion['Reunion']['idreunion']), null, __('Are you sure you want to delete # %s?', $reunion['Reunion']['idreunion'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reunion'), array('action' => 'add')); ?></li>
	</ul>
</div>
