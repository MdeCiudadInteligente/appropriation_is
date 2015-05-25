<div class="traSessions form mde-form">
<?php echo $this->Form->create('TraSession'); ?>
	<fieldset>
		<legend><?php echo __('Add Tra Session'); ?></legend>


		<div class="seccion-person">	
			<div class="input">
				<label>Formaciones</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-training" data-emptymsg="Por favor ingresa una formación" class="Trainings-autocomplete">
				<div class="results-input-training" data-input-name="data[TraSession][training_id]">			
				</div>
			</div>
		</div>	
		<div class="seccion-person">	
			<div class="input" >
				<label>Temáticas <i class="icon-eye view-service view-service-button" data-url="<?php echo Router::url( '/', true ) ?>Thematics/getThematic.json" data-callback="appendServiceHtml" data-post="{'a':'1'}" data-name="Temáticas" data-alowedIndex="{'name':'Nombre','prefijo':'prefijo','description':'Descripción'}">Ver temáticas</i></label>
				<input type="text"  class="Thematics-autocomplete" data-required="true" data-valcontainer=".results-input-thematics" data-emptymsg="Por favor ingresa mínimo una temática">
				<div class="results-input-thematics" data-input-name="data[Thematic][Thematic][]">
			</div>
			</div>
		</div>	
		<div class="input"  style="text-align:right">
		<?php echo $this->Html->link('+ Nuevo formador', array('controller' => 'PerTrainers', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-person">	
			<div class="input" >
				<label>Formador</label>
				<input type="text"  class="Trainers-autocomplete" data-required="true" data-valcontainer=".results-input-tra" data-emptymsg="Por favor ingresa un formador">
				<div class="results-input-tra" data-input-name="data[PerTrainer][PerTrainer][]" >	
				</div>
			</div>
		</div>	


	<?php		
		echo $this->Form->input('activity_place',array('maxLength'=>'200'));	
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

		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
