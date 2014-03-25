<div class="meetings form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Meeting'); ?></legend>
	<?php		
		echo $this->Form->input('meeting_type',array ('options' => array ('Seguimiento'=>'Seguimiento','Gestión con aliados'=>'Gestión con aliados' ,'Empalme'=>'Empalme')));
		echo $this->Form->input('meeting_title');
		echo $this->Form->input('meeting_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('meeting_commitments',array ( 'type'=>'textarea'));
		echo $this->Form->input('adjunct',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Meetings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>
	</ul>
</div>
