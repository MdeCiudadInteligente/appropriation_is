<div class="meetings-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Accompaniment'), array('action' => 'add')); ?></li>
				<?php 
						$usuario_level= $this->Session->read('Auth.User.permission_level');
				?>				
			</ul>
		</div>
	</div>
<!-- 	End left block -->	
	<div class="right-block">
		<div class="meetings">
			<h2><?php echo __('Accompaniments'); ?></h2>
				<?php
					$gridOptions=array(
							'gridId'=>'gridAccompaniments',
							'gridTitle'=>'Acompañamientos',
							'height'=>800,
							'serviceUrl'=>'Accompaniments/index_service.json',
							'fields'=>array(
							    array("dataIndex"=>"id","column"=>false),
				                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
				                array("dataIndex"=>"f_reunion",'header'=>'Fecha','sortable'=>true,'align'=>"center","column"=>true),
				                array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
				                array("dataIndex"=>"titulo",'header'=>'Título','sortable'=>true,'align'=>"left","column"=>true),
				                array("dataIndex"=>"descripcion",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
				                array("dataIndex"=>"num_participantes",'header'=>'Número de participantes','sortable'=>true,'align'=>"center","column"=>true),
				                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
				                array("dataIndex"=>"modification_date",'header'=>'Fecha de Modificación','sortable'=>true,'align'=>"left","column"=>false),
				               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
							),
							'expander'=>array(
								'fields'=>array(
									array('title'=>'Descripción','field'=>'descripcion'),
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
				


