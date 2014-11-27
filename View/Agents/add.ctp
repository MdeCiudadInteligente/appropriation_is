<div class="agents form mde-form">
<?php echo $this->Form->create('Agent'); ?>
	<fieldset>
		<legend><?php echo __('Add Agent'); ?></legend>
	
		<div class="input"  style="text-align:right">
				<?php echo $this->Html->link('+ Nueva persona', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-person">	
			<div class="input" >
				<label>Personas</label>
				<input type="text"  class="person-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona">
				<div class="results-input" data-input-name="data[Person][Person][]">					
				</div>
			</div>
		</div>	
	<?php
		echo $this->Form->input('zone_id',array('empty'=>'Seleccionar la zona'));
		echo $this->Form->input('agent_estado',array ('options' => array ('Activo'=>'Activo','Inactivo'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('action' => 'index')); ?></li>
		<li><?php //echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
