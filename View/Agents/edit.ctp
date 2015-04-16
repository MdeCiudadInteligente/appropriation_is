<div class="agents form mde-form">
<?php echo $this->Form->create('Agent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Agent'); ?></legend>
	<?php
		echo $this->Form->input('id_agent');
		echo $this->Form->input('person_id',array('disabled'=>'disabled','label'=>'Agente'));
		echo $this->Form->input('zone_id',array('empty'=>'Seleccionar la zona'));
		echo $this->Form->input('agent_estado',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php   echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?></li>
   </ul>
</div>
