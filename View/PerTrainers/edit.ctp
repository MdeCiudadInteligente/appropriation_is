<div class="perTrainers form mde-form">
<?php echo $this->Form->create('PerTrainer'); 
	$site=$this->request->data['Site'];
?>
	<fieldset>
		<legend><?php echo __('Edit Per Trainer'); ?></legend>
	<?php
<<<<<<< HEAD
		echo $this->Form->input('id');
=======
		//echo $this->Form->input('id',array('type'=>'hidden'));
>>>>>>> 8827d0f1b7ada5d5c576038d8c18c9a05245c9f0
		echo $this->Form->input('per_trainer_type_id');
		echo $this->Form->input('per_profession_id');
	?>
	<div class="seccion-person">	
		<div class="input">
			<label>Sitio</label>
			<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
			<div class="results-input-site" data-input-name="data[PerTrainer][site_id]">
				<input type="hidden" name="data[PerTrainer][site_id]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name']?>" id="val-input-site-<?php echo $site['id_site']?>">
			</div>
		</div>
	</div>	
	<?php 			

		echo $this->Form->input('per_trainer_fund_id');
		?>
		
		<div class="input"  style="text-align:right">
				<?php echo $this->Html->link('+ Nueva persona', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
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
