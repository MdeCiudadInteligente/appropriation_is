


<div class="meetings-cont app-grid-container">

	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Meeting'), array('action' => 'add')); ?></li>
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
						'gridId'=>'gridMeetings',
						'gridTitle'=>'Reuniones xxx',
						'height'=>800,
						'serviceUrl'=>'Meetings/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio xxx','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"f_reunion",'header'=>'Fecha','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"titulo",'header'=>'Titulo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"descripcion",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"compromisos",'header'=>'compromisos','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'fecha Creacion','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Descripcion','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripcion','field'=>'descripcion'),
								array('title'=>'Compromisos','field'=>'compromisos')
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
