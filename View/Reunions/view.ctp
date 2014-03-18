<div class="reunions view">
<h2><?php echo __('Reunion'); ?></h2>
	<dl>
		<dt><?php echo __('Idreunion'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['idreunion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Drcp'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['id_drcp']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiporeunion'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['tiporeunion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombreasistentes'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['nombreasistentes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidad'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['entidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['correo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto1'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['adjunto1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto2'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['adjunto2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adjunto3'); ?></dt>
		<dd>
			<?php echo h($reunion['Reunion']['adjunto3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reunion'), array('action' => 'edit', $reunion['Reunion']['idreunion'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reunion'), array('action' => 'delete', $reunion['Reunion']['idreunion']), null, __('Are you sure you want to delete # %s?', $reunion['Reunion']['idreunion'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reunions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reunion'), array('action' => 'add')); ?> </li>
	</ul>
</div>
