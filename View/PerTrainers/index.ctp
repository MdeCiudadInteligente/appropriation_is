<div class="formador-cont app-grid-container">

	<div class="left-block">
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
				<?php	$usuario_level= $this->Session->read('Auth.User.permission_level');	
				if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'||$usuario_level == '4'){?>
				<li><?php echo $this->Html->link(__('New Per Trainer'), array('action' => 'add')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>	
<!-- 	End left block -->	

	<div class="right-block">

		<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$gridOptions=array(
						'gridId'=>'gridPerTrainer',
						'gridTitle'=>'Formador',
						'height'=>500,
						'serviceUrl'=>'PerTrainers/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
							array("dataIndex"=>"people",'header'=>'Tipo de formador','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"per_trainer_type",'header'=>'Tipo de formador','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"per_profession",'header'=>'Tipo de profesión','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"per_trainer_fund",'header'=>'Tipo de fondo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"site",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"observations",'header'=>'Observaciones','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"state",'header'=>'Estado','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha de modificación','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'Usuario','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Observaciones','field'=>'observations')
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

