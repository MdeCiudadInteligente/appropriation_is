<div class="populationTypes form mde-form">
<?php echo $this->Form->create('PopulationType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Population Type'); ?></legend>
	<?php		
		echo $this->Form->input('id_population_type',array('type'=>'hidden'));
		echo $this->Form->input('name',array('maxlength'=>'45','label'=>'Nombre'));			
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Population Types'), array('action' => 'index')); ?></li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Html->link(__('New Population Type'), array('action' => 'add')); ?></li>
		<?php }?>
		</ul>
</div>
