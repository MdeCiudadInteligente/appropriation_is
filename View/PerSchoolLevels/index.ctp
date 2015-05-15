<div class="school-levels-cont app-grid-container">
<div class="right-block">
		<div class="sites">
			<h2><?php echo __('PerSchoolLevel'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridSchoolLevel',
						'gridTitle'=>'Nivel de Escolaridad',
						'height'=>800,
						'serviceUrl'=>'PerSchoolLevels/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"name",'header'=>'Nombre','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha Modificación','sortable'=>true,'align'=>"left","column"=>false),
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
	</div>	

<!-- End meetings container -->
</div>		
