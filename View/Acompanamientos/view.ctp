<div class="acompanamientos view">
<h2><?php echo __('Acompanamiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id Acompanamiento'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['id_acompanamiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Drc'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['id_drc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Acomp'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['tipo_acomp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrp Actividad'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['descrp_actividad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nro Participantes'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['nro_participantes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Archivo Adjunto'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['archivo_adjunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Acompanamiento'); ?></dt>
		<dd>
			<?php echo h($acompanamiento['Acompanamiento']['fecha_acompanamiento']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Acompanamiento'), array('action' => 'edit', $acompanamiento['Acompanamiento']['id_acompanamiento'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Acompanamiento'), array('action' => 'delete', $acompanamiento['Acompanamiento']['id_acompanamiento']), null, __('Are you sure you want to delete # %s?', $acompanamiento['Acompanamiento']['id_acompanamiento'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acompanamientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acompanamiento'), array('action' => 'add')); ?> </li>
	</ul>
</div>
