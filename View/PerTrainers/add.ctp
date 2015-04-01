<div class="perTrainers form mde-form">
<?php echo $this->Form->create('PerTrainer'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Trainer'); ?></legend>
	<?php
		echo $this->Form->input('per_trainer_type_id',array('empty'=>'Seleccione el tipo de formador'));
		echo $this->Form->input('per_profession_id',array('empty'=>'Seleccione la profesión'));
	?>
<div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
				<div class="results-input-site" data-input-name="data[Site][Site][]">			
				</div>
			</div>
		</div>	
	<?php 			
		//echo $this->Form->input('per_people_type_id',array('empty'=>'Seleccione el tipo de persona'));
		echo $this->Form->input('per_trainer_fund_id',array('empty'=>'Seleccione el fondo'));
		?>
		
		<div class="input"  style="text-align:right">
				<?php echo $this->Html->link('+ Nueva persona', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-person">	
			<div class="input" >
				<label>Personas</label>
				<input type="text"  class="person-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona">
				<div class="results-input" data-input-name="data[Person][Person][]" data-limit="1">
					
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
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('List Per Trainers'), array('action' => 'index')); ?></li>
	</ul>
</div>
