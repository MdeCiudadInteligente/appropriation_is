<div class="right-block">
		<div class="divtypes">
			<h2><?php echo __('divtypes'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridpertrainersschedule',
						'gridTitle'=>'Horarios de los formadores',
						'height'=>801,
						'serviceUrl'=>'PerTrainerSchedules/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
							array("dataIndex"=>"people",'header'=>'Formador','sortable'=>true,'align'=>"center","column"=>true),
			                array("dataIndex"=>"day",'header'=>'Día','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"start_time",'header'=>'Hora inicio','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"end_time",'header'=>'Hora fin','sortable'=>true,'align'=>"center","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha CreaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha ModificaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>false,
						'AllowAll'=>true,
						'printCrud'=>true,
						'baseParams'=>array('start'=>0,'limit'=>100)
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>
		</div>
	<!-- End right block -->		
<!-- End divtypes container -->
</div>	

