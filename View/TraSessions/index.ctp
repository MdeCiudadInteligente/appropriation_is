	<div class="right-block">
		<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridTrainings',
						'gridTitle'=>'Formaciones',
						'height'=>800,
						'serviceUrl'=>'trainings/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
							array("dataIndex"=>"code",'header'=>'Código','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"procesos",'header'=>'Proceso','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"poblacion",'header'=>'Tipo de población','sortable'=>true,'align'=>"left","column"=>false),
							array("dataIndex"=>"training_type",'header'=>'Tipo de formación','sortable'=>true,'align'=>"left","column"=>true),
							//array("dataIndex"=>"sitios",'header'=>'Sitios','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"aliados",'header'=>'Aliados','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"description",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha de modificación','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"username",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false)
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
						'baseParams'=>array('start'=>0,'limit'=>100)
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>
		</div>
	<!-- End right block -->		
	</div>	
<!-- End meetings container -->
</div>	



