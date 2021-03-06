﻿<div class="neighborhoods-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
				<ul>
					<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
					<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
					if ($usuario_level == '1'){?>
					<li><?php echo $this->Html->link(__('New Neighborhood'), array('action' => 'add')); ?></li>
					<?php }?>
					<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
				</ul>
		</div>
	</div>	
<!-- 	End left block -->		
	<div class="right-block">
		<div class="neighborhoods">
			<h2><?php echo __('Neighborhoods'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridNeighborhoods',
						'gridTitle'=>'Barrios',
						'height'=>800,
						'serviceUrl'=>'Neighborhoods/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"nombre_barrio",'header'=>'Nombre Barrio','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"id_comuna",'header'=>'Comuna','sortable'=>true,'align'=>"left","column"=>false),
							array("dataIndex"=>"name_comuna",'header'=>'Nombre Comuna','sortable'=>true,'align'=>"left","column"=>true),			               
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
	