<div class="Thematics-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Thematic'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">
		<div class="thematics">
			<h2><?php echo __('thematics'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridThematics',
						'gridTitle'=>'Temáticas',
						'height'=>800,
						'serviceUrl'=>'Thematics/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"name",'header'=>'Nombre','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"prefix",'header'=>'Prefijo','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"description",'header'=>'Descripción','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"state",'header'=>'Estado','sortable'=>true,'align'=>"center","column"=>false),
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
