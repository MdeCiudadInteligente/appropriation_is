<div class="divulgations form">
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Divulgation'); ?></legend>
	<?php
		echo $this->Form->input('divulgation_type',array ('options' => array ('Activaciones pedagógicas'=>'Activaciones pedagógicas','Toma de sitios de gobierno'=>'Toma de sitios de gobierno' ,'Eventos'=>'Eventos')));	
		echo $this->Form->input('divulgation_name');
		echo $this->Form->input('divulgation_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('participant_number');
		echo $this->Form->input('activity_place');
		echo $this->Form->input('divulgation_adjunct',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct1',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
	</ul>
</div>
