
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
	$message=__('La persona actual no se encuentra registrada en el sistema. ¿Desea registrarlo y asociarlo a esta formación?');
?>
<div class="training-admin admin-view samallAdminView  form mde-form">
<!-- Context block --> 

	<section class="context-info-block waypont-toggler " data-toggleclass="fixed-top">
		<legend>Administrar Formación : <?php echo $this->request->data['Training']['code'] ?> <i class="control-accordion  icon-up-open-big" data-container=".context-info-block" data-toggleclass="close"></i></legend>
		<div class="row"> 
			<div class="col-md-3">
				<label>Descripcion</label>
				<span><?php echo $this->request->data['Training']['description'] ?></span>
			</div>	
			<div class="col-md-3">
				<label>Tipo de población</label>
				<span><?php echo concatIndex($this->request->data['PopulationType'],'name')?></span>
			</div>	
			<div class="col-md-3">
				<label>Formadores</label>
				<span><?php echo concatIndex($this->request->data['trainers'],'name')?></span>
			</div>	
			<div class="col-md-3">
				<label>Proceso</label>
				<span><?php echo concatIndex($this->request->data['TraProcess'],'name')?></span>
			</div>	
		</div>

		<div class="row">	
			<div class="col-md-3">
				<label>Código</label>
				<span><?php echo $this->request->data['Training']['code'] ?></span>
			</div>	
			<div class="col-md-3">
				<label>Tipo</label>
				<span><?php echo $this->request->data['TraType']['name'] ?></span>
			</div>	
			<div class="col-md-3">
				<label>Fecha de inicio</label>
				<span><?php echo $this->request->data['Training']['start_date'] ?></span>
			</div>	

<!--		<div class="col-md-2">
				<label>Fecha final</label>
				<span><?php echo $this->request->data['Training']['start_date'] ?></span>
			</div>	
 -->
 			<div class="col-md-3">
				<label>Estado</label>
				<span><?php echo $this->request->data['Training']['current_state'] ?></span>
			</div>	
		</div>
	</section> 


<!-- Invisible info block, Not found person  -->

	<section class="tra-info">
		<div id="empty-data-holder" data-message="<?php echo $message ?>" data-service="<?php echo $empty_service ?>"  style="display:none;" data-messageTime="1000" data-type="confirm">
		</div>		
	</section>


<!-- Add participant -->
	<section class="add-participant section-accordion ">
		<form>
			<fieldset>
	    	<legend> Agregar participante <i class="control-accordion  icon-up-open-big" data-container=".add-participant" data-toggleclass="closed"></i></legend>
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
    
	<section class="add-session section-accordion">
		<form>
			<fieldset>
		    	<legend> Agregar Sesiónes 
		    		<div class="legend-buttons">
		    			<div class="icon-action data-icon ajax-view " data-service="<?php echo $session_service ?>" data-aside="#right-content-aside" data-training="<?php echo $id_training ?>" ><i class="icon-plus-1 add-session"></i></div>
		    		</div>
					<i class="control-accordion  icon-up-open-big" data-container=".add-session" data-toggleclass="closed"></i>		    		
		    	</legend>
			</fieldset>
		</form>
		<div class="Training-grid">
	    <?php
	    	//Participants Training grid 
	    	echo $this->element('grids/Trainings/sessions',array('Training'=>$id_training))
	    ?>
    	</div>
    </section>
</div>	
