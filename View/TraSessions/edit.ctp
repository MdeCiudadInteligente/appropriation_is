<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession'); 
	 $site=$this->request->data['Site'];
	 $training=$this->request->data['Training'];
	 //$trainers=$this->request->data['trainers'];
	 $Thematic=$this->request->data['Thematic'];
	 $trainers=$this->request->data['trainers'];

?>
	<fieldset>
		<legend><?php echo __('Edit Tra Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	
	<div class="seccion-person">
		<div class="input">
			<label>Formaciones</label>
			<input type="text"  class="Trainings-autocomplete" data-load="true" data-required="true" data-valcontainer=".results-input-training" data-emptymsg="Por favor ingresa una formación" data-limit="1">
			<div class="results-input-training" data-input-name="data[TraSession][training_id]">
				<input type="hidden" name="data[TraSession][training_id]" value="<?php echo $training['id'] ?>" data-display="<?php echo $training['code']?>" id="val-input-site-<?php echo $training['id']?>">
			</div>
		</div>
	</div>	
	<div class="seccion-divulgations seccion-person">	
				<div class="input" >
					<label>Temáticas <i class="icon-eye view-service view-service-button" data-url="<?php echo Router::url( '/', true ) ?>Thematics/getThematic.json" data-callback="appendServiceHtml" data-post="{'a':'1'}" data-name="Temáticas" data-alowedIndex="{'name':'Nombre','prefijo':'prefijo','description':'Descripción'}">Ver temáticas</i></label>
					<input type="text"  class="Thematics-autocomplete" data-required="true" data-load="true" data-valcontainer=".results-input-thematics" data-emptymsg="Por favor ingresa mínimo una temática">
					<div class="results-input-thematics" data-input-name="data[Thematic][Thematic][]">
						<?php 
							foreach ($Thematic as $key => $Thematic) { ?>
								<input type="hidden" name="data[Thematic][Thematic][]" value="<?php echo $Thematic['id'] ?>" data-display="<?php echo $Thematic['name']?>" id="val-input-te-<?php echo $Thematic['id']?>">
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
	<div class="seccion-person">
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete" data-limit="100">
					<div class="results-input-site" data-input-name="data[Site][Site][]">
					<?php
					foreach ($site as $key => $site) { ?>
						<input type="hidden" name="data[Site][Site][]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name'] ?>" id="val-input-si-<?php echo $site['id_site']?>">
					<?php } ?>
					</div>
			</div>
		</div>
		<?php	   
		echo $this->Form->input('observation');
		echo $this->Form->input('start_date',array ('id' => 'datepicker','type'=>'text'));
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraSession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TraSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
