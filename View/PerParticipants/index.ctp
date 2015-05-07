<div class="sites-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
				if ($usuario_level == '1'){?>	
				<li><?php echo $this->Html->link(__('New Site'), array('action' => 'add')); ?></li>
				<?php }?>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">
		<div class="sites">
			<h2><?php echo __('Sites'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridParticipants',
						'gridTitle'=>'Participantes',
						'height'=>800,
						'serviceUrl'=>'PerParticipants/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"people",'header'=>'Participante','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"neighborhood",'header'=>'Barrio','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"totalpopulationtype",'header'=>'Tipo de población','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"other_population_type",'header'=>'Otro tipo de población','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"marital_status",'header'=>'Estado civil','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"school_level",'header'=>'Nivel de escolaridad','sortable'=>true,'align'=>"left","column"=>true),
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
