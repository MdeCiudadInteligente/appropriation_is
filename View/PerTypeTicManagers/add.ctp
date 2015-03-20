<div class="perTypeTicManagers form mde-form"  >
<?php echo $this->Form->create('PerTypeTicManager'); ?>
	<fieldset>
		<legend><?php echo __('Add Per Type Tic Manager'); ?></legend>
	<?php
		echo $this->Form->input('type');
		echo $this->Form->input('profession');
		echo $this->Form->input('age');
		echo $this->Form->input('genre');
		echo $this->Form->input('workplace');
		echo $this->Form->input('fund_type');
		echo $this->Form->input('adjunct',array('type'=>'file'));
		echo $this->Form->input('adjunct1',array('type'=>'file'));
		echo $this->Form->input('adjunct2',array('type'=>'file'));
		echo $this->Form->input('adjunct3',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
		echo $this->Form->input('start_date',array ('class' => 'datepickerMDE','type'=>'text'));
		echo $this->Form->input('end_date',array ('class' => 'datepickerMDE','type'=>'text'));
		echo $this->Form->input('schedule');
		echo $this->Form->input('observations');
		echo $this->Form->input('type_person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Per Type Tic Managers'), array('action' => 'index')); ?></li>
	</ul>
</div>
