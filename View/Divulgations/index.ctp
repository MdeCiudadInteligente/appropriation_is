

<div class="divulgacion-cont app-grid-container">

	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Divulgation'), array('action' => 'add')); ?></li>
				<?php 
				$usuario_level= $this->Session->read('Auth.User.permission_level');
				?>
				</li>
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">

		<div class="meetings">
			<h2><?php echo __('Meetings'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridDivulgatios',
						'gridTitle'=>'Divulgaciones',
						'height'=>500,
						'serviceUrl'=>'Divulgations/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"f_divulgacion",'header'=>'Fecha','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"titulo",'header'=>'Titulo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"descripcion",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"nparticipantes",'header'=>'Compromisos','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"lactividad",'header'=>'Lugar de la actividad','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creacion','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripcion','field'=>'descripcion'),
								array('title'=>'Lugar de la actividad','field'=>'lactividad')
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
