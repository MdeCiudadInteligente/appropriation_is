<div class="accompaniments form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Agregar acompañamiento'); ?></legend>
	<?php
		echo $this->Form->input('accompaniment_type',array ('options' => array ('practicantes'=>'Practicantes','Estudiantes de PP, jóvenes por la convivencia o alfabetizadores'=>'Estudiantes de PP, jóvenes por la convivencia o alfabetizadores' ,
				'Aula Abierta'=>'Aula Abierta','Grados'=>'Grados','Curso, taller o charla'=>'Curso, taller o charla','DiverTIC'=>'DiverTIC')));
		echo $this->Form->input('accompaniment_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('participant_number');
		//echo $this->Form->input('adjunct');	
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acción'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
