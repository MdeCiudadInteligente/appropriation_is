
<?php  
		


?>

	<div class="people form mde-form">
		<form accept-charset="utf-8" method="post" id="PersonRegisterParticipantForm" action="/apropiacion/Trainings/registerParticipant?regType=1&amp;id=10">
			<fieldset>
				<legend><?php echo __('Add Person'); ?></legend>
					<?php
						echo $this->Form->input('cedula',array('type'=>'text','onkeypress'=>'return isNumberKey(event)'));
						echo $this->Form->input('name',array('maxLength'=>50));
						echo $this->Form->input('lastname',array('maxLength'=>50));
						echo $this->Form->input('charge',array('maxLength'=>80));
						echo $this->Form->input('email',array('maxLength'=>256,'type'=>'email'));
						echo $this->Form->input('phone',array('onkeypress'=>'return isNumberKey(event)'));
						echo $this->Form->input('cell',array('onkeypress'=>'return isNumberKey(event)'));
						echo $this->Form->input('entity',array('maxLength'=>80,'label'=>'Entidad/Organización/Grupo'));
						echo $this->Form->input('genre',array('type'=>'select','options'=> array('1'=>'Femenino','2'=>'Masculino'),'empty'=>'Seleccione Género'));
						echo $this->Form->input('economic_level',array('type'=>'select','options'=> array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'),'empty'=>'Seleccione Estrato'));
						echo $this->Form->input('birthday',array ('id' => 'datepicker','type'=>'text'));
					?>
			</fieldset>
		</form>	
	</div>

	<div class="perParticipants form mde-form">
		<form accept-charset="utf-8" method="post" id="PersonRegisterParticipantForm" action="/apropiacion/Trainings/registerParticipant?regType=1&amp;id=10">
		<fieldset>
			<legend><?php echo __('Add Per Participant'); ?></legend>
		<?php
			//echo $this->Form->input('neighborhood_id');
		?>	
			<div class="seccion-person">
				<div class="input">
					<label>Barrio</label>
					<input type="text"  class="Neighborhoods-autocomplete" data-required="true" data-valcontainer=".results-input-neighborhood" data-emptymsg="Por favor ingresa un barrio" data-limit="1">
					<div class="results-input-neighborhood" data-input-name="data[PerParticipant][neighborhood_id]">
					</div>
				</div>
			</div> 
			<div class="seccion-person">	
				<div class="input" >
					<label>Tipo de población</label>
					<input type="text"  class="PopulationTypes-autocomplete" data-required="true" data-valcontainer=".results-input-typ" data-emptymsg="Por favor ingresa un tipo de población">
					<div class="results-input-typ" data-input-name="data[PopulationType][PopulationType][]" >	
					</div>
			</div>
		</div>		
			<?php	
				echo $this->Form->input('other_population_type');
				echo $this->Form->input('marital_status_id',array('empty'=>'Seleccione el estado civil'));
				echo $this->Form->input('school_level_id',array('empty'=>'Seleccione el nivel de escolaridad'));
			?>
			</fieldset>
		</form>
	</div>
