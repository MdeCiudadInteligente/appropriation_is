<div class="perTypeTicManagers-cont app-grid-container">
	<div class="left-block">
			<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
				<li><?php echo $this->Html->link(__('New Per Type Tic Manager'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
			</ul>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">
		<div class="people">
			<h2><?php echo __('Gestor Tic'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridPerTypeTicManager',
						'gridTitle'=>'Gestores Tic',
						'height'=>800,
						'serviceUrl'=>'PerTypeTicManager/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"type",'header'=>'Tipo gestor tic','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"profession",'header'=>'Profesión','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"age",'header'=>'Edad','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"genre",'header'=>'Género','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"workplace",'header'=>'Lugar trabajo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"fund_type",'header'=>'falta','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"adjunct",'header'=>'Adjunto','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"adjunct1",'header'=>'Adjunto 1','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"adjunct2",'header'=>'Adjunto 2','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"adjunct3",'header'=>'Adjunto 3','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"dir",'header'=>'Dirección','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"start_date",'header'=>'Fecha Inicio','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"end_date",'header'=>'Fecha Final','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"schedule",'header'=>'Horario','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"observations",'header'=>'Observaciones','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"type_person_id",'header'=>'Tipo de persona','sortable'=>true,'align'=>"left","column"=>false),
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

<!-- End gestor tic container -->
</div>	