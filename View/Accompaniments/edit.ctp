<div class="accompaniments form">
<?php echo $this->Form->create('Accompaniment',array('type'=>'file'));?>
	<fieldset>
		<legend><?php echo __('Edit Accompaniment'); ?></legend>
	<?php
		echo $this->Form->input('id_accompaniment');
		echo $this->Form->input('accompaniment_type');
		echo $this->Form->input('accompaniment_description');
		echo $this->Form->input('participant_number');
		echo $this->Form->input('accompaniment_adjunct',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct1',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct1',array('type'=>'file'));
		echo $this->Form->input('accompaniment_adjunct2',array('disabled'=>'disabled'));
		echo $this->Form->input('accompaniment_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('site_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Accompaniment.id_accompaniment')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Accompaniment.id_accompaniment'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accompaniments'), array('action' => 'index')); ?></li>
		<?php 
		$usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level === '1'){?>
		<li><?php echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>
		<?php }?>
	</ul>
</div>
