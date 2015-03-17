

<div class="divulgacion-cont app-grid-container">

	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
				if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'||$usuario_level == '4'){?>
				<li><?php echo $this->Html->link(__('Nueva Sensibilización'), array('action' => 'add')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">

		<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridDivulgatios',
						'gridTitle'=>'Sensibilizaciones',
						'height'=>500,
						'serviceUrl'=>'Divulgations/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"f_divulgacion",'header'=>'Fecha','sortable'=>true,'align'=>"center","column"=>true),
			                //array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
			                //array("dataIndex"=>"titulo",'header'=>'Título','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"tipodiv",'header'=>'Tipo Sensibilización','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"descripcion",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"tipopob",'header'=>'Tipo Población','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"nparticipantes",'header'=>'Número de participantes','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"lactividad",'header'=>'Lugar de la actividad','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripción','field'=>'descripcion')
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
