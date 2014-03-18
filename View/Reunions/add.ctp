<div class="reunions form">
<?php echo $this->Form->create('Reunion'); ?>
	<fieldset>
		<legend><?php echo __('Add Reunion'); ?></legend>
	<?php
		echo $this->Form->input('id_drcp');
		echo $this->Form->input('tiporeunion');
		echo $this->Form->input('nombreasistentes');
		echo $this->Form->input('entidad');
		echo $this->Form->input('cargo');
		echo $this->Form->input('correo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('adjunto1');
		echo $this->Form->input('adjunto2');
		echo $this->Form->input('adjunto3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reunions'), array('action' => 'index')); ?></li>
	</ul>
</div>
