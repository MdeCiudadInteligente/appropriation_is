<div class="activities-cont app-grid-container">
<!-- actions  -->
	<div class="left-block">
	  <div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
			<?php $usuario_level= $this->Session->read('Auth.User.permission_level');?>		
			<?php if ($usuario_level == '1'||$usuario_level == '4'||$usuario_level == '5'){?>	
			<li><?php echo $this->Html->link(__('Usuarios'), array('controller' => 'Users', 'action' => 'index')); ?> </li>		
			<li><?php echo $this->Html->link(__('Agentes dinamizadores'), array('controller' => 'Agents', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Tipos de formadores'), array('controller' => 'PerTrainerTypes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Formadores'), array('controller' => 'PerTrainers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Procesos de formación'), array('controller' => 'TraProcesses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Tipos de 	Sensibilizaciones'), array('controller' => 'Divtypes', 'action' => 'index')); ?> </li>		
			<li><?php echo $this->Html->link(__('Tipos de Sitios'), array('controller' => 'SiteTypes', 'action' => 'index')); ?> </li>			
			<li><?php echo $this->Html->link(__('Tipos de Población'), array('controller' => 'PopulationTypes', 'action' => 'index')); ?> </li>			
			<li><?php echo $this->Html->link(__('Sitios'), array('controller' => 'Sites', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Temáticas'), array('controller' => 'Thematics', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Barrios'), array('controller' => 'Neighborhoods', 'action' => 'index')); ?> </li>	
			<li><?php echo $this->Html->link(__('Comunas'), array('controller' => 'Communes', 'action' => 'index')); ?> </li>		
			<li><?php echo $this->Html->link(__('Zonas'), array('controller' => 'Zones', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Aliados'), array('controller' => 'TraAllies', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Tipos de Formación'), array('controller' => 'TraTypes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Tipos de Profesión'), array('controller' => 'PerProfessions', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Fondo del Formador'), array('controller' => 'PerTrainerFunds', 'action' => 'index')); ?> </li>
			<?php }?>	
			
			<?php if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '4'||$usuario_level == '5'){?>		
			<li><?php echo $this->Html->link(__('Personas'), array('controller' => 'People', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Encargados'), array('controller' => 'Owners','action' => 'index')); ?></li>
		    <?php }?>
		</ul>
	  </div>
	</div>		
<!-- end actions  -->
<!-- 	End left block -->	
	
<!-- meetings  -->
<div class="right-block">
<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'||$usuario_level == '4'||$usuario_level == '5'){?>	
	<div class="meetings">
	<h2><?php echo __('Meetings'); ?></h2>	
	<?php
				$gridOptions1=array(
						'gridId'=>'gridMeetings',
						'gridTitle'=>'Reuniones',
						'height'=>800,
						'serviceUrl'=>'Meetings/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"f_reunion",'header'=>'Fecha','sortable'=>true,'align'=>"center","column"=>true),
			                array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"titulo",'header'=>'Título','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"descripcion",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"compromisos",'header'=>'Compromisos','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Fecha Modificación','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripción','field'=>'descripcion'),
								array('title'=>'Compromisos','field'=>'compromisos')
							)
						),
						'printCrud'=>true,
						'baseParams'=>array('start'=>0,'limit'=>100),
						'controller'=>'Meetings'
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions1)); ?>

	</div>
<?php }?>
<!-- end meetings  -->
<P></P>
<!-- accompaniments  -->
<?php if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'||$usuario_level == '4'||$usuario_level == '5'){?>	
	<h2><?php echo __('Accompaniments'); ?></h2>
	<?php
					$gridOptions2=array(
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
							'baseParams'=>array('start'=>0,'limit'=>100),
							'controller'=>'Accompaniments'
					);
				?>
				<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions2)); ?>
		
		<!-- End right block -->	
	<?php }?>	
<!-- end accompaniments  -->
<P></P>
<!-- divulgations  -->



<?php if ($usuario_level == '1'||$usuario_level == '2'||$usuario_level == '3'||$usuario_level == '4'||$usuario_level == '5'){?>	
	<div class="divulgations">
			<h2><?php echo __('Divulgations'); ?></h2>
			<?php
				$gridOptions3=array(
						'gridId'=>'gridDivulgatios',
						'gridTitle'=>'Sensibilizaciones',
						'height'=>500,
						'serviceUrl'=>'Divulgations/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"f_divulgacion",'header'=>'Fecha','sortable'=>true,'align'=>"center","column"=>true),
			                //array("dataIndex"=>"tipo",'header'=>'Tipo','sortable'=>true,'align'=>"left","column"=>true),
			                //array("dataIndex"=>"titulo",'header'=>'Título','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"tipodiv",'header'=>'Tipo Divulgación','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"descripcion",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>true),
							array("dataIndex"=>"tipopob",'header'=>'Tipo Población','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"nparticipantes",'header'=>'Número de participantes','sortable'=>true,'align'=>"center","column"=>true),
							array("dataIndex"=>"lactividad",'header'=>'Lugar de la actividad','sortable'=>true,'align'=>"left","column"=>true),
			                array("dataIndex"=>"creation_date",'header'=>'Fecha Creación','sortable'=>true,'align'=>"left","column"=>false),
			                array("dataIndex"=>"modification_date",'header'=>'Descripción','sortable'=>true,'align'=>"left","column"=>false),
			               array("dataIndex"=>"user_id",'header'=>'user_id','sortable'=>true,'align'=>"left","column"=>false)
						),
						'expander'=>array(
							'fields'=>array(
								array('title'=>'Descripción','field'=>'descripcion')
							)
						),
						'printCrud'=>true,
						'baseParams'=>array('start'=>0,'limit'=>100),
						'controller'=>'Divulgations'
				);
			?>
			<?php echo $this->element('grid_default',array('gridOptions'=>$gridOptions3)); ?>
		</div>
		<?php }?>	
	<!-- End right block -->		
	</div>	
<!-- End meetings container -->
</div>	
	
	