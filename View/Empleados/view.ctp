<div class="empleados view">
<h2><?php echo __('Empleado'); ?></h2>
	<dl>
		<dt><?php echo __('Cedempleado'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['Cedempleado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($empleado['Empleado']['correo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empleado'), array('action' => 'edit', $empleado['Empleado']['Cedempleado'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empleado'), array('action' => 'delete', $empleado['Empleado']['Cedempleado']), null, __('Are you sure you want to delete # %s?', $empleado['Empleado']['Cedempleado'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empleados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empleado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diariocampos'), array('controller' => 'diariocampos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diariocampo'), array('controller' => 'diariocampos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Diariocampos'); ?></h3>
	<?php if (!empty($empleado['diariocampo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Iddiariocampo'); ?></th>
		<th><?php echo __('Ced Empleado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empleado['diariocampo'] as $diariocampo): ?>
		<tr>
			<td><?php echo $diariocampo['iddiariocampo']; ?></td>
			<td><?php echo $diariocampo['ced_empleado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'diariocampos', 'action' => 'view', $diariocampo['iddiariocampo'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'diariocampos', 'action' => 'edit', $diariocampo['iddiariocampo'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'diariocampos', 'action' => 'delete', $diariocampo['iddiariocampo']), null, __('Are you sure you want to delete # %s?', $diariocampo['iddiariocampo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Diariocampo'), array('controller' => 'diariocampos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
