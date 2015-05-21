<div class="trainings form mde-form">
<?php echo $this->Form->create('Training'); 
	//$site=$this->request->data['Site'];
	$processes=$this->request->data['TraProcess'];
	$allies=$this->request->data['TraAlly'];
	$populationtype=$this->request->data['PopulationType'];
	$trainers=$this->request->data['trainers'];
?>
	<fieldset>
		<legend><?php echo __('Edit Training'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code',array('disabled'=>'disabled'));	
		echo $this->Form->input('type_id');
		echo $this->Form->input('start_date',array ('id' => 'datepicker','type'=>'text','label'=>'Fecha Inicio'));
		echo $this->Form->input('end_date',array ('class' => 'datepickerMDE','type'=>'text','label'=>'Fecha Final'));
		echo $this->Form->input('current_state',array ('options' => array ('1'=>'En Curso','2'=>'Finalizada'),'empty'=>'Seleccione estado','label'=>'Estado Actual'));
		echo $this->Form->input('activity_place');
		echo $this->Form->input('description');
	?>
	<!--  <div class="seccion-person">
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete" data-limit="100">
				<div class="results-input-site" data-input-name="data[Site][Site][]">
				<?php 
					//foreach ($site as $key => $site) { ?>
						<input type="hidden" name="data[Site][Site][]" value="<?php //echo $site['id_site'] ?>" data-display="<?php //echo $site['site_name'] ?>" id="val-input-si-<?php //echo $site['id_site']?>">
				<?php //} ?>
				</div>
			</div>
	   </div> -->
	   <div class="seccion-person">
			<div class="input">
				<label>Proceso</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-tra" data-emptymsg="Por favor ingresa un proceso" class="TraProcesses-autocomplete">
				<div class="results-input-tra" data-input-name="data[TraProcess][TraProcess][]">
				<?php 
					foreach ($processes as $key => $processes) { ?>
						<input type="hidden" name="data[TraProcess][TraProcess][]" value="<?php echo $processes['id'] ?>" data-display="<?php echo $processes['name'] ?>" id="val-input-pro-<?php echo $processes['id']?>">
				<?php } ?>
				</div>
			</div>
	   </div>
	   <div class="seccion-person">
			<div class="input">
				<label>Aliado</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-ally" data-emptymsg="Por favor ingresa un aliado" class="TraAllies-autocomplete">
				<div class="results-input-ally" data-input-name="data[TraAlly][TraAlly][]">
				<?php 
					foreach ($allies as $key => $allies) { ?>
						<input type="hidden" name="data[TraAlly][TraAlly][]" value="<?php echo $allies['id'] ?>" data-display="<?php echo $allies['name'] ?>" id="val-input-al-<?php echo $allies['id']?>">
				<?php } ?>
				</div>
			</div>
	   </div>
	   <div class="seccion-person">
			<div class="input">
				<label>Tipo Poblaci&oacute;n</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de población" class="PopulationTypes-autocomplete">
				<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]">
				<?php 
					foreach ($populationtype as $key => $populationtype) { ?>
						<input type="hidden" name="data[PopulationType][PopulationType][]" value="<?php echo $populationtype['id_population_type'] ?>" data-display="<?php echo $populationtype['name'] ?>" id="val-input-pt-<?php echo $populationtype['id_population_type']?>">
				<?php } ?>
				</div>
			</div>
	   </div>
	   <div class="input"  style="text-align:right">
				<?php echo $this->Html->link('+ Nuevo formador', array('controller' => 'Pertrainers', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
	   <div class="seccion-person">
			<div class="input">
				<label>Formador</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-for" data-emptymsg="Por favor ingresa un tipo de formador" class="Trainers-autocomplete">
				<div class="results-input-for" data-input-name="data[PerTrainer][PerTrainer][]">
				<?php 
					foreach ($trainers as $key => $trainer) { ?>
						<input type="hidden" name="data[PerTrainer][PerTrainer][]" value="<?php echo $trainer['t1']['id'] ?>" data-display="<?php echo $trainer['t3']['name'].' '.$trainer['t3']['lastname'] ?>" id="val-input-for-<?php echo $trainer['t1']['id']?>">
				<?php } ?>
				</div>
			</div>
	   </div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?></li>
	</ul>
</div>
