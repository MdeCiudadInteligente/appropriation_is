<div class="Divtypes-cont app-grid-container">
	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
				if ($usuario_level == '1'){?>	

				 <li><?php echo $this->Html->link(__('New training Process'), array('action' => 'add')); ?> </li>

				<?php }?>
				<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
			</ul>
		</div>
	</div>	
<!-- 	End left block -->		
<div class="right-block">
		<div class="divtypes">
			<h2><?php echo __('divtypes'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridtraprocesses',
						'gridTitle'=>'Procesos de formación',
						'height'=>801,
						'serviceUrl'=>'TraProcesses/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"name_p",'header'=>'Nombre','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"state_p",'header'=>'Estado proceso','sortable'=>true,'align'=>"center","column"=>false),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha CreaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha ModificaciÃ³n','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"user_id",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false)
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

