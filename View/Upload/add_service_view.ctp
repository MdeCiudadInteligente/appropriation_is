<?php 

$file_scope=$this->request->query['scope'];
$data=$this->request->data;

foreach ($file_scope as $key => $value) {
	$dataScope[$value]=$data[$value];
}

$service=Router::url( array('controller' => 'Upload', 'action' => 'add_service','?'=>array(
			'file_scope'=>$dataScope
			)
	),true
);

?>

<div class="Uploads  form mde-form">
	<?php echo $this->Form->create('Uploads', array('class'=>'serviceSubmit aj-upload-service',"data-service"=>$service)); ?>	
	<fieldset>
		<legend><?php echo __('Archivos adjuntos'); ?></legend>
		<section class="upload-controller">
			<header>Arrastra o selecciona los archivos que quieres adjuntar</header>
			<div class="file-input-cont"><input type="file" class="input-file-cont" multiple></div>
			<div class="drag-area">
				
			</div>	
			<div class="preview-controller">

			</div>
		</section>	

	</fieldset>	
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
