<div class="perSchoolLevels form mde-form">
<?php echo $this->Form->create('PerSchoolLevel'); ?>
	<fieldset>
		<legend><?php echo __('Edit School Level'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
