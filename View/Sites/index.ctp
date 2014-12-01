﻿<div class="sites-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
				<?php 
						$usuario_level= $this->Session->read('Auth.User.permission_level');
				?>				
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">
		<div class="sites">
			<h2><?php echo __('Sites'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridSites',
						'gridTitle'=>'Sitios',
						'height'=>800,
						'serviceUrl'=>'Sites/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"nsitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"telsitio",'header'=>'Teléfono','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"dir_sitio",'header'=>'Dirección','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"cor_sitio",'header'=>'Correo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"bar_sitio",'header'=>'Barrio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"tsitio",'header'=>'Tipo de sitio','sortable'=>true,'align'=>"left","column"=>true),
						    array("dataIndex"=>"estado_sitio",'header'=>'Estado','sortable'=>true,'align'=>"left","column"=>true),
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
