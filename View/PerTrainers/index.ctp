<<<<<<< HEAD
<div class="divulgacion-cont app-grid-container">

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
						'gridTitle'=>'PerTrainer',
						'height'=>500,
						'serviceUrl'=>'PerTrainer/index_service.json',
						'fields'=>array(
						    array("dataIndex"=>"id","column"=>false),
			                array("dataIndex"=>"sitio",'header'=>'Sitio','sortable'=>true,'align'=>"left","column"=>true),
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
=======
<div class="perTrainers index">
	<h2><?php echo __('Per Trainers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_trainer_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_profession_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_people_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('per_trainer_fund_id'); ?></th>
			<th><?php echo $this->Paginator->sort('site_id'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perTrainers as $perTrainer): ?>
	<tr>
		<td><?php echo h($perTrainer['PerTrainer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerTrainerType']['name'], array('controller' => 'per_trainer_types', 'action' => 'view', $perTrainer['PerTrainerType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerProfession']['name'], array('controller' => 'per_professions', 'action' => 'view', $perTrainer['PerProfession']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerPeopleType']['id'], array('controller' => 'per_people_types', 'action' => 'view', $perTrainer['PerPeopleType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['PerTrainerFund']['name'], array('controller' => 'per_trainer_funds', 'action' => 'view', $perTrainer['PerTrainerFund']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($perTrainer['Site']['site_name'], array('controller' => 'sites', 'action' => 'view', $perTrainer['Site']['id_site'])); ?>
		</td>
		<td><?php echo h($perTrainer['PerTrainer']['observations']); ?>&nbsp;</td>
		<td><?php echo h($perTrainer['PerTrainer']['state']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perTrainer['PerTrainer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perTrainer['PerTrainer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perTrainer['PerTrainer']['id']), null, __('Are you sure you want to delete # %s?', $perTrainer['PerTrainer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('New Per Trainer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Regresar'), array('controller' => 'activities', 'action' => 'configuration')); ?> </li>	
	</ul>
</div>
>>>>>>> df5ed06a6f108ba92e3fbe371f409941d99ddd04
