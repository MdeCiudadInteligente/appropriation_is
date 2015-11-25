<?php
//Grid training participant View

	$service=Router::url( array('controller' => 'Upload', 'action' => 'index_service','ext'=>'json','?'=>array(
				'dataScope'=>$dataScope
			)
		),true
	);

	$dataScopeIndex=current(array_keys($dataScope));
	$currentGalleryClass='gallery-class-'.$dataScopeIndex.'-session-'.$dataScope[$dataScopeIndex];

	$adminUrl=Router::url( array('controller' => 'Upload', 'action' => 'delete_service','ext'=>'json'),true);
	
	$UploadUrl=Router::url( array('controller' => 'Upload', 'action' => 'add_service_view','?'=>		array('scope'=>array('session_id'))
		),true
	);



	$gridOptions=array(
			'gridId'=>'gridUploads',
			'gridTitle'=>'Archivos',
			'height'=>600,
			'serviceUrl'=>array('route'=>$service),
			'fields'=>array(
			    array("dataIndex"=>"id","column"=>false),
			    array("dataIndex"=>"tags","column"=>false),
			    array("dataIndex"=>"meta","column"=>false),
			    array("dataIndex"=>"size","column"=>false),
			    array("dataIndex"=>"session_id","column"=>false),
			    array("dataIndex"=>"user_id","column"=>false),
				array("dataIndex"=>"name",'header'=>'Nombre','align'=>"left","column"=>true),
				array("dataIndex"=>"ext",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>false),
				array("dataIndex"=>"url",'header'=>'URL','sortable'=>true,'align'=>"left","column"=>false),
			),
			'expander'=>array(
				'fields'=>array(
					array('title'=>'Fecha de creacion ','field'=>'creation_date'),
					array('title'=>'Fecha de modificación ','field'=>'modification_date'
						),
					array('title'=>'Usuario ','field'=>'username'
						)
				)
			),
			'printCrud'=>true,
			'showOnlyCustomCrud'=>true,
			'baseParams'=>array('start'=>0,'limit'=>100),
			'add_operations'=>json_encode(array(
				'vars'=>array(
					'id'=>NULL,
					'url'=>NULL,
					'name'=>NULL,
					'ext'=>NULL
				),
				'markup'=>'
				<div class="custom_render">
					<i class="icon-trash  remove_session  grid-send-service" data-confirm="true" data-type="confirm" data-message="¿Estás seguro que deseas eliminar completamente este archivo?" data-url="'.$adminUrl.'" data-id="{id}" data-trainingId="{training_id}">
					</i>
					<i class="icon-eye  view_file show-full-picture-view-gallery '.$currentGalleryClass.' "  data-id="{id}" data-ext={ext} data-url={url} data-name={name} data-galleryheader="'.$galleryHeader.'" data-galleryheadlabel="'.$galleryheadlabel.'" data-aside="#left-content-aside" data-galleryClass="'.$currentGalleryClass.'" >
					</i>
				</div>'
			))
	);
?>

<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>



