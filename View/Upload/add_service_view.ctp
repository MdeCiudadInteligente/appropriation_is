<?php 

$file_scope=$this->request->query['scope'];
$data=$this->request->data;
$galleryHeader=$data['galleryhead'];
$galleryheadlabel=$data['galleryheadlabel'];

foreach ($file_scope as $key => $value) {
	$dataScope[$value]=$data[$value];
}

$service=Router::url( array('controller' => 'Upload', 'action' => 'add_service','?'=>array(
			'file_scope'=>$dataScope,
			'model'=>$data['model']
			)
	),true
);

?>

<div class="Uploads  form mde-form">
	<?php echo $this->Form->create('Uploads', array('class'=>'serviceSubmit aj-upload-service',"data-service"=>$service)); ?>	
	<fieldset>
		<legend><?php echo __('Archivos adjuntos'); ?></legend>
		<section class="upload-controller">
				<!-- <header>Para cargar archivos al sistema puedes seleccionarlos o arrastralos hacia la zona punteada y acontinuación haz click en el boton guardar</header>
 -->			<div class="file-input-cont" >
				<div class="submit">
					<input type="button" class="fake-input" value="Seleccionar">
					<input id="file-input-md" type="file" class="input-file-cont" multiple>
				</div>				
				
			</div>
			<div class="drag-area">
					<div class="text-info">Para cargar archivos al sistema puedes seleccionarlos por medio del boton en la parte superior o arrastralos aquí. Posteriomente haz click en el boton guardar (Puedes subir hasta 3 archivos)</div>
			</div>	
			<div class="preview-controller">

			</div>
		</section>	

	</fieldset>	
	<?php echo $this->Form->end(__('Submit')); ?>

	<section class="upload-grid-cont">
	    <?php
	    	//Participants Training grid 
	    	echo $this->element('grids/Uploads/uploads',array('dataScope'=>$dataScope,'galleryHeader'=>$galleryHeader,'galleryheadlabel'=>$galleryheadlabel))
	    ?>
	</section>	
</div>
