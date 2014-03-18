<div class="empleados index">
	<h2><?php echo __('Empleados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Cedempleado'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empleados as $empleado): ?>
	<tr>
		<td><?php echo h($empleado['Empleado']['Cedempleado']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['celular']); ?>&nbsp;</td>
		<td><?php echo h($empleado['Empleado']['correo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empleado['Empleado']['Cedempleado'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empleado['Empleado']['Cedempleado'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empleado['Empleado']['Cedempleado']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['Cedempleado'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Diariocampos'), array('controller' => 'diariocampos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diariocampo'), array('controller' => 'diariocampos', 'action' => 'add')); ?> </li>
	</ul>
</div>
