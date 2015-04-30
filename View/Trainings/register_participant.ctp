
<?php  
		


?>

	<div class="people form mde-form">
		<form accept-charset="utf-8" method="post" id="PersonRegisterParticipantForm" action="/apropiacion/Trainings/registerParticipant?regType=1&amp;id=10">
			<fieldset>
				<legend><?php echo __('Add Person'); ?></legend>
					<?php
						echo $this->Form->input('name',array('maxLength'=>50));
						echo $this->Form->input('lastname',array('maxLength'=>50));
						echo $this->Form->input('cedula',array('type'=>'text'));
						echo $this->Form->input('charge',array('maxLength'=>80));
						echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
						echo $this->Form->input('phone',array());
						echo $this->Form->input('cell',array());
						echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));
						echo $this->Form->input('genre',array('type'=>'select','options'=> array('1'=>'Femenino','2'=>'Masculino'),'empty'=>'Seleccione Género'));
						echo $this->Form->input('economic_level',array('type'=>'select','options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),'empty'=>'Seleccione Estrato'));
						echo $this->Form->input('birthday',array ('id' => 'datepicker','type'=>'text'));
						echo $this->Form->input('other_population_type');
						echo $this->Form->input('marital_status_id',array('empty'=>'Seleccione el estado civil'));
						echo $this->Form->input('school_level_id',array('empty'=>'Seleccione el nivel de escolaridad'));
					?>
					<div class="seccion-person">
						<div class="input">
							<label>Barrio</label>
							<input type="text"  class="Neighborhoods-autocomplete" data-load="true" data-required="true" data-valcontainer=".results-input-neighborhood" data-emptymsg="Por favor ingresa un barrio" data-limit="1">
							<div class="results-input-neighborhood" data-input-name="data[PerParticipant][neighborhood_id]">
								<?php if(isset($neighborhood)) { ?>
										<input type="hidden" name="data[PerParticipant][neighborhood_id]" value="<?php echo $neighborhood['id_neighborhood'] ?>" data-display="<?php echo $neighborhood['neighborhood_name']?>" id="val-input-site-<?php echo $neighborhood['id_neighborhood']?>">
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
												<input type="hidden" name="data[PopulationType][PopulationType][]" value="<?php echo $PopulationType['id_population_type'] ?>" data-display="<?php echo $PopulationType['name']." ".$PopulationType['name'] ?>" id="val-input-<?php echo $PopulationType['id_population_type']?>">
								<?php	}
									}
								 } ?>
								</div>
						</div>
					</div>		
			</fieldset>
		</form>	
	</div>

