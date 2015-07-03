<div class="formador-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
				if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'){?>
				<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?></li>
				<?php }?></ul>
		</div>
	</div>	

<!-- 	End left block -->	

	<div class="right-block">
		<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$adminUrl=Router::url( array('controller' => 'Trainings', 'action' => 'admin'),true);
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
							array("dataIndex"=>"sitios",'header'=>'Sitios','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"participantes",'header'=>'Participantes','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"aliados",'header'=>'Aliados','sortable'=>true,'align'=>"left","column"=>true),							
							array("dataIndex"=>"description",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"estado",'header'=>'Estado','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha de modificación','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"username",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>true)
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
						'baseParams'=>array('start'=>0,'limit'=>100),
						'add_operations'=>json_encode(array(
							'vars'=>array(
								'id'=>NULL,
								'code'=>NULL
							),
							'markup'=>'<div class="custom_render"><i class="icon-town-hall  admin-training go-to-url-id" data-url="'.$adminUrl.'" data-id="{id}" data-code="{code}"></i></div>'
						))
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions)); ?>
		</div>
	<!-- End right block -->		
	</div>	
<!-- End meetings container -->
</div>	

