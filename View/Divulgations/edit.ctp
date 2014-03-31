<div class="divulgations form">
<?php echo $this->Form->create('Divulgation',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Divulgation'); ?></legend>
	<?php
		echo $this->Form->input('site_id');
		echo $this->Form->input('id_divulgation');
		echo $this->Form->input('divulgation_name');
		echo $this->Form->input('divulgation_type');
		echo $this->Form->input('divulgation_description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('activity_place');
		echo $this->Form->input('divulgation_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('divulgation_adjunct',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('divulgation_adjunct1',array('type'=>'file'));
		echo $this->Form->input('divulgation_adjunct2',array('disabled'=>'disabled'));
		echo $this->Form->input('divulgation_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Divulgation.id_divulgation')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Divulgation.id_divulgation'))); ?></li>
		<li><?php echo $this->Html->link(__('List Divulgations'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>		
		<?php }?>
		<li><?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
	</ul>
</div>
