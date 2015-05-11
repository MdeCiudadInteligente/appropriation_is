<?php
//Grid training participant View
	$id_training=$Training;
	$service=Router::url( array('controller' => 'Trainings', 'action' => 'index_sessions','ext'=>'json','?'=>array(
				'training'=>$id_training
			)
		),true
	);

	$adminUrl=Router::url( array('controller' => 'PerParticipantsTrainings', 'action' => 'service_delete','ext'=>'json'),true);
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
			    array("dataIndex"=>"other_population_type","column"=>false),
				array("dataIndex"=>"person_name",'header'=>'Nombre','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"population_types",'header'=>'Tipo de población','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"neighborhood_name",'header'=>'Barrio','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"marital_status",'header'=>'Estado civil','sortable'=>true,'align'=>"left","column"=>true),
				array("dataIndex"=>"school_level",'header'=>'Escolaridad','sortable'=>true,'align'=>"left","column"=>true)
			),
			'expander'=>array(
				'fields'=>array(
					array('title'=>'Otro tipo de población','field'=>'other_population_type'),
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
					'training_id'=>NULL,
					'participant_id'=>NULL,
				),
				'markup'=>'<div class="custom_render"><i class="icon-minus-circle  remove_participant grid-send-service" data-url="'.$adminUrl.'" data-id="{id}" data-trainingId="{training_id}" data-participantId="{participant_id}"></i></div>'
			))
	);
?>

<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>



