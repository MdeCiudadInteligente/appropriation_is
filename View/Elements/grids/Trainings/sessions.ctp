<?php
//Grid training participant View
	$id_training=$Training;
	$service=Router::url( array('controller' => 'Trainings', 'action' => 'index_sessions','ext'=>'json','?'=>array(
				'training'=>$id_training
			)
		),true
	);
	$adminUrl=Router::url( array('controller' => 'TraSessions', 'action' => 'service_delete','ext'=>'json'),true);
	$assistUrl=Router::url( array('controller' => 'TraSessions', 'action' => 'assist'),true);
	
	$UploadUrl=Router::url( array('controller' => 'Upload', 'action' => 'add_service_view','?'=>		array('scope'=>array('session_id'))
		),true
	);


	$gridOptions=array(
			'gridId'=>'gridTrainingSessions',
			'gridTitle'=>'Sesiones',
			'height'=>600,
			'serviceUrl'=>array('route'=>$service),
			'fields'=>array(
			    array("dataIndex"=>"id","column"=>false),
			    array("dataIndex"=>"training_id","column"=>false),
			    array("dataIndex"=>"participant_id","column"=>false),
			    array("dataIndex"=>"user_id","column"=>false),
			    array("dataIndex"=>"username","column"=>false),
			    array("dataIndex"=>"modification_date","column"=>false),
			    array("dataIndex"=>"creation_date","column"=>false),
			    array("dataIndex"=>"observation","column"=>false),
				array("dataIndex"=>"start_date",'header'=>'Fecha','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"activity_place",'header'=>'Lugar','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"start_time",'header'=>'Hora Inicial','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"end_time",'header'=>'Hora Final','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"trainers",'header'=>'Formadores','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"thematics",'header'=>'Tematicas','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"participants",'header'=>'Asistentes','sortable'=>true,'align'=>"left","column"=>true)
			),
			'expander'=>array(
				'fields'=>array(
					array('title'=>'Observaciones','field'=>'observation'),
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
					'training_id'=>NULL
				),
				'markup'=>'
				<div class="custom_render">
					<i class="icon-minus-circle  remove_session  grid-send-service" data-confirm="true" data-type="confirm" data-message="¿Estás seguro que deseas eliminar esta sesión?" data-url="'.$adminUrl.'" data-id="{id}" data-trainingId="{training_id}">
					</i>
					<i class="icon-users  add_assist ajax-view" data-service="'.$assistUrl.'/{id}" data-id="{id}" data-aside="#right-content-aside" data-trainingId="{training_id}">
					</i>
					<i class="icon-upload  add_file ajax-view" data-service="'.$UploadUrl.'" data-session_id="{id}" data-aside="#right-content-aside" data-trainingId="{training_id}">
					</i>
				</div>'
			))
	);
?>

<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>



