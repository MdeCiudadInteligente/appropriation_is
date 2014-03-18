<div class="acompanamientos index">
	<h2><?php echo __('Acompanamientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id_acompanamiento'); ?></th>
			<th><?php echo $this->Paginator->sort('id_drc'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_acomp'); ?></th>
			<th><?php echo $this->Paginator->sort('descrp_actividad'); ?></th>
			<th><?php echo $this->Paginator->sort('nro_participantes'); ?></th>
			<th><?php echo $this->Paginator->sort('archivo_adjunto'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_acompanamiento'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($acompanamientos as $acompanamiento): ?>
	<tr>
		<td><?php echo h($acompanamiento['Acompanamiento']['id_acompanamiento']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['id_drc']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['tipo_acomp']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['descrp_actividad']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['nro_participantes']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['archivo_adjunto']); ?>&nbsp;</td>
		<td><?php echo h($acompanamiento['Acompanamiento']['fecha_acompanamiento']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $acompanamiento['Acompanamiento']['id_acompanamiento'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $acompanamiento['Acompanamiento']['id_acompanamiento'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $acompanamiento['Acompanamiento']['id_acompanamiento']), null, __('Are you sure you want to delete # %s?', $acompanamiento['Acompanamiento']['id_acompanamiento'])); ?>
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
		<li><?php echo $this->Html->link(__('New Acompanamiento'), array('action' => 'add')); ?></li>
	</ul>
</div>
