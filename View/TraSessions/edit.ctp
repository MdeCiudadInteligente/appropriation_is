<div class="traSessions form">
<?php echo $this->Form->create('TraSession'); 
	 $site=$this->request->data['Site'];

?>
	<fieldset>
		<legend><?php echo __('Edit Tra Session'); ?></legend>
	<?php
		echo $this->Form->input('id');
	
		//echo $this->Form->input('training_id');
	?>
		<div class="seccion-person">
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-load="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete" data-limit="100">
					<div class="results-input-site" data-input-name="data[Site][Site][]">
					<?php
					foreach ($site as $key => $site) { ?>
						<input type="hidden" name="data[Site][Site][]" value="<?php echo $site['id_site'] ?>" data-display="<?php echo $site['site_name'] ?>" id="val-input-si-<?php echo $site['id_site']?>">
					<?php } ?>
					</div>
			</div>
		</div>
		<?php	   
		echo $this->Form->input('observation');
		echo $this->Form->input('start_date',array ('id' => 'datepicker','type'=>'text'));
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TraSession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TraSession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tra Sessions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
