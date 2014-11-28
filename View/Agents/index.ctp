

<div class="agents-cont app-grid-container">

	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Agent'), array('action' => 'add')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
				<?php 
				$usuario_level= $this->Session->read('Auth.User.permission_level');
				?>
				</li>
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">

		<div class="agent">
			<h2><?php echo __('Agents'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridAgents',
						'gridTitle'=>'Agentes',
						'height'=>500,
						'serviceUrl'=>'Agents/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"npersona",'header'=>'Persona','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"nzona",'header'=>'Zona','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"estado_agente",'header'=>'Estado Agente','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
							array("dataIndex"=>"modification_date",'header'=>'Fecha Modificación','sortable'=>true,'align'=>"left","column"=>false),
							array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)

						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'nzona','field'=>'descripcion'),
								array('title'=>'estado_agente','field'=>'compromisos')
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
