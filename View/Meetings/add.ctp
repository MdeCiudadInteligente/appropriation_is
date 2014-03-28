<div class="meetings form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Meeting'); ?></legend>
	<?php		
		echo $this->Form->input('meeting_type',array ('options' => array ('Seguimiento'=>'Seguimiento','Gestión con aliados'=>'Gestión con aliados' ,'Empalme'=>'Empalme')));
		echo $this->Form->input('meeting_title');
		echo $this->Form->input('meeting_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('meeting_commitments',array ( 'type'=>'textarea'));	
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'/*,'multiple'*/));		
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>
		
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<!--  <li><?php //echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
