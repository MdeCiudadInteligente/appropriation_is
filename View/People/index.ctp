<div class="meetings-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
				<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">
		<div class="people">
			<h2><?php echo __('People'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridPeople',
						'gridTitle'=>'Personas',
						'height'=>800,
						'serviceUrl'=>'People/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"cedula",'header'=>'Cédula','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"nombre",'header'=>'Nombres','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"apellido",'header'=>'Apellidos','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"cargo",'header'=>'Cargo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"correo",'header'=>'Correo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"telefono",'header'=>'Télefono','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"celular",'header'=>'Celular','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"entidad",'header'=>'Entidad','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha Modificación','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripcion','field'=>'descripcion'),
								//array('title'=>'Compromisos','field'=>'compromisos')
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
	