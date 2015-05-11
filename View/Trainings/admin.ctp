﻿
<?php  
	$processes=$this->request->data['TraProcess'];
	$allies=$this->request->data['TraAlly'];
	$populationtype=$this->request->data['PopulationType'];
	$trainers=$this->request->data['trainers'];
	$id_training=$this->request->data['Training']['id'];
	$empty_service=Router::url( array('controller' => 'Trainings', 'action' => 'registerParticipant','?'=>array(
				'type'=>'register-person',
				'training'=>$id_training
			)
		),true
	);
	$session_service=Router::url( array('controller' => 'TraSessions', 'action' => 'add_service_view','?'=>array(
				'training'=>$id_training
			)
		),true
	);
	$message=__('The current person is not registered to the system.Do you want to register him?');
?>
<div class="training-admin admin-view samallAdminView  form mde-form">
	<section class="tra-info">
		<div id="empty-data-holder" data-message="<?php echo $message ?>" data-service="<?php echo $empty_service ?>"  style="display:none;" data-messageTime="1000" data-type="confirm">
		</div>		
	</section>

	<section class="add-participant ">
		<form>
			<fieldset>
	    	<legend> Agregar participante</legend>
				<div class="seccion-person">	
					<div class="input" >
						<label>Ingresa la informacion de la persona ( Nombre / Documento ) </label>
						<input type="text"  class="person-autocomplete-trainers" data-id="<?php echo $id_training ?>" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona">
						<div class="results-input" data-input-name="data[Person][Person][]">
						</div>
					</div>
				</div>	
			</fieldset>
		</form>
		<div class="Training-grid">
	    <?php
	    	//Participants Training grid 
	    	echo $this->element('grids/Trainings/participants',array('Training'=>$id_training))
	    ?>
    	</div>
    </section>

    <!-- Admin  sessions -->
    
	<section class="add-session">
		<form>
			<fieldset>
		    	<legend> Agregar Sessiones 
		    		<div class="legend-buttons">
		    			<div class="icon-action data-icon ajax-view " data-service="<?php echo $session_service ?>" data-aside="#right-content-aside" data-training="<?php echo $id_training ?>" ><i class="icon-user-add add-session"></i></div>
		    		</div>
		    	</legend>
			</fieldset>
		</form>
		<div class="Training-grid">
	    <?php
	    	//Participants Training grid 
	    	echo $this->element('grids/Trainings/participants',array('Training'=>$id_training))
	    ?>
    	</div>
    </section>
</div>	
