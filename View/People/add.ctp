<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Add Person'); ?></legend>
	<?php
<<<<<<< HEAD
			echo $this->Form->input('id_person',array('type'=>'text'));
			echo $this->Form->input('name');		
			echo $this->Form->input('lastname');		
			echo $this->Form->input('charge');
			echo $this->Form->input('phone');
			echo $this->Form->input('cell');
			echo $this->Form->input('entity');		
		

=======
		echo $this->Form->input('id_person');
		echo $this->Form->input('name');
		echo $this->Form->input('lastname');
		echo $this->Form->input('charge');
		echo $this->Form->input('phone');
		echo $this->Form->input('cell');
		echo $this->Form->input('entity');
>>>>>>> 415b47925f1e2e6ca7c979d2adc35b87275670c2
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
