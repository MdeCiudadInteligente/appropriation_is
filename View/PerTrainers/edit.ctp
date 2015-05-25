<div class="perTrainers form mde-form">
<?php echo $this->Form->create('PerTrainer'); 
	//$site=$this->request->data['Site'];
	
?>
	<fieldset>
		<legend><?php echo __('Editar Formador'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('per_trainer_type_id');
		echo $this->Form->input('per_profession_id');
		echo $this->Form->input('star_date',array ('id' => 'datepicker','type'=>'text','label'=>'Fecha Inicio'));
		echo $this->Form->input('end_date',array ('class' => 'datepickerMDE','type'=>'text','label'=>'Fecha Final'));	?>
	<?php 			

		echo $this->Form->input('per_trainer_fund_id');
		?>
		<div class="seccion-person">	
			<div class="input">
				<label>Persona</label>
				<div><?php echo $per_trainers_responsefp['personname']; ?></div>
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
