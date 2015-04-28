
<?php  
	$processes=$this->request->data['TraProcess'];
	$allies=$this->request->data['TraAlly'];
	$populationtype=$this->request->data['PopulationType'];
	$trainers=$this->request->data['trainers'];
	$id_training=$this->request->data['Training']['id'];
?>
<div class="training-admin admin-view  form mde-form">
	<section class="tra-info">

	</section>

	<section class="add-participant">
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
    </section>
</div>	
