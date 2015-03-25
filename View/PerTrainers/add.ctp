<div class="perTrainers form">
<?php echo $this->Form->create('PerTrainer'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer'); ?></legend>
	<?php
		echo $this->Form->input('per_trainer_type_id');
		echo $this->Form->input('per_profession_id');
	?>
<div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
				<div class="results-input-site" data-input-name="data[PerTrainer][site_id]">			
				</div>
			</div>
		</div>	
	<?php 			
		echo $this->Form->input('per_people_type_id');
		echo $this->Form->input('per_trainer_fund_id');
		?>
		
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
		echo $this->Form->input('observations');
		echo $this->Form->input('state',array ('options' => array ('1'=>'Activo','0'=>'Inactivo'),'empty'=>'Seleccione estado'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Trainers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Per Trainer Types'), array('controller' => 'per_trainer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Type'), array('controller' => 'per_trainer_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Professions'), array('controller' => 'per_professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Profession'), array('controller' => 'per_professions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per People Types'), array('controller' => 'per_people_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per People Type'), array('controller' => 'per_people_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Funds'), array('controller' => 'per_trainer_funds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Fund'), array('controller' => 'per_trainer_funds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainer Schedules'), array('controller' => 'per_trainer_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer Schedule'), array('controller' => 'per_trainer_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
