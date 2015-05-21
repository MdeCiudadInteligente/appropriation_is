
<?php  
	$neighborhood=$this->request->data['Neighborhood'];		
	$populationTypes=$this->request->data['PopulationType'];
	$CurrentTrainingParticipant=(isset($this->request->data['CurrentTraining']['id']))?$this->request->data['CurrentTraining']['id']:'';


?>

	<div class="people form mde-form">
	<?php echo $this->Form->create('Person',array('class'=>'serviceSubmit',"data-service"=>$this->request->data['saveService'])); ?>
			<fieldset>
				<legend><?php echo __('Agregar Participante'); ?></legend>
					<div class="reg-data">
						<input type="hidden" name="id_person" value="<?php echo $this->request->data['Person']['id_person']  ?>">
						<input type="hidden" name="id_training" value="<?php echo $this->request->query['training']  ?>">
						<input type="hidden" name="participant_id" value="<?php echo $this->request->data['PerParticipant']['id']  ?>">
						<input type="hidden" name="id_training_participant" value="<?php echo $CurrentTrainingParticipant  ?>">
					</div>
					<?php
						echo $this->Form->input('name',array('maxLength'=>50));
						echo $this->Form->input('lastname',array('maxLength'=>50));
						echo $this->Form->input('cedula',array('type'=>'text','class'=>'validate-numeric'));
						echo $this->Form->input('charge',array('maxLength'=>80,'class'=>'input-validate','data-numeric'=>'true'));
						echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
						echo $this->Form->input('phone',array('class'=>'validate-numeric'));
						echo $this->Form->input('cell',array('class'=>'validate-numeric'));
						echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));
						echo $this->Form->input('genre',array('type'=>'select','options'=> array('1'=>'Femenino','2'=>'Masculino'),'empty'=>'Seleccione Género'));
						echo $this->Form->input('economic_level',array('type'=>'select','options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),'empty'=>'Seleccione Estrato'));
						echo $this->Form->input('birthday',array ('id' => 'datepicker','type'=>'text'));
						echo $this->Form->input('PerParticipant.other_population_type');
						echo $this->Form->input('PerParticipant.marital_status_id',array('empty'=>'Seleccione el estado civil'));
						echo $this->Form->input('PerParticipant.school_level_id',array('empty'=>'Seleccione el nivel de escolaridad'));
					?>
					<div class="seccion-person">
						<div class="input">
							<label>Barrio</label>
							<input type="text"  class="Neighborhoods-autocomplete" data-load="true" data-required="true" data-valcontainer=".results-input-neighborhood" data-emptymsg="Por favor ingresa un barrio" data-limit="1">
							<div class="results-input-neighborhood" data-input-name="data[PerParticipant][neighborhood_id]">
								<?php if(isset($neighborhood)) { ?>
										<input type="hidden" name="data[PerParticipant][neighborhood_id]" value="<?php echo $neighborhood['id'] ?>" data-display="<?php echo $neighborhood['name']?>" id="val-input-site-<?php echo $neighborhood['id']?>">
								<?php } ?>	
							</div>
						</div>
					</div>
					<div class="seccion-person">	
							<div class="input" >
								<label>Tipo de población</label>
								<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-load="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de población">
								<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]" >	
								<?php 
									if(isset($populationTypes)){
										if(is_array($populationTypes)){
											foreach ($populationTypes as $key => $PopulationType) { ?>
												<input type="hidden" name="data[PopulationType][PopulationType][]" value="<?php echo $PopulationType['population_types']['id_population_type'] ?>" data-display="<?php echo $PopulationType['population_types']['name']?>" id="val-input-<?php echo $PopulationType['population_types']['id_population_type']?>">
								<?php	}
									}
								 } ?>
								</div>
						</div>
					</div>		
			</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
	</div>

