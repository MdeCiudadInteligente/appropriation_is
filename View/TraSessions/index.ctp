	<div class="right-block">
		<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridTraSessions',
						'gridTitle'=>'Sesiones de la formación',
						'height'=>800,
						'serviceUrl'=>'TraSessions/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
							array("dataIndex"=>"training",'header'=>'Formación','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"activity_place",'header'=>'Lugar','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"observation",'header'=>'Observación','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"start_date",'header'=>'Fecha','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"start_time",'header'=>'Hora de Inicio','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"end_time",'header'=>'Hora de Finalización','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha CreaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha de modificaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			               	array("dataIndex"=>"user_id",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Fecha de creacion ','field'=>'creation_date'),
								array('title'=>'Fecha de modificaciÃ³n ','field'=>'modification_date'
									),
								array('title'=>'Usuario ','field'=>'username'
									)
							)
						),
						'printCrud'=>true,
						'baseParams'=>array('start'=>0,'limit'=>100)
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>
		</div>
	<!-- End right block -->		
	</div>	
<!-- End meetings container -->
	



