<div class="meetings form mde-form">
<?php echo $this->Form->create('Meeting',array('type'=>'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Meeting'); ?></legend>

		<div class="seccion-person">	
			<div class="input">
				<label>Sitio</label>
				<input type="text" data-required="true" data-valcontainer=".results-input-site" data-emptymsg="Por favor ingresa un sitio" class="Site-autocomplete">
				<div class="results-input-site" data-input-name="data[Meeting][site_id]">			
				</div>
			</div>
		</div>	


		<?php
		echo $this->Form->input('meeting_date',array ('id' => 'datepicker','type'=>'text'));		
		echo $this->Form->input('meeting_type',array ('type'=>'select','options' => array ('Seguimiento'=>'Seguimiento','Gestión con aliados'=>'Gestión con aliados' ,'Empalme'=>'Empalme'),'empty'=>'Seleccione el tipo de reunión'));
		echo $this->Form->input('meeting_title',array('maxlenght'=>'90'));
		//echo $this->Form->input('Person');/*La persona la acbe de agregar*/
		?>
		<div class="input"  style="text-align:right">
				<?php echo $this->Html->link('+ Nueva persona', array('controller' => 'People', 'action' => 'add'),array('target'=>'_blank')); ?>
		</div>
		<div class="seccion-person">	
			<div class="input" >
				<label>Personas</label>
				<input type="text"  class="person-autocomplete" data-required="true" data-valcontainer=".results-input" data-emptymsg="Por favor ingresa minimo una persona">
				<div class="results-input" data-input-name="data[Person][Person][]">
					
				</div>
			</div>
		</div>	

		<?php
		echo $this->Form->input('meeting_description',array ( 'type'=>'textarea'));		
		echo $this->Form->input('meeting_commitments',array ( 'type'=>'textarea'));	
		echo $this->Form->input('meeting_adjunct',array('type'=>'file'/*,'multiple'*/));		
		echo $this->Form->input('meeting_adjunct1',array('type'=>'file'));
		echo $this->Form->input('meeting_adjunct2',array('type'=>'file'));
		echo $this->Form->input('dir',array('type'=>'hidden'));
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
		if ($usuario_level == '1'){?>
		<!--<li><?php //echo $this->Html->link(__('List Sites'), array('controller' => 'sites', 'action' => 'index')); ?> </li>-->
		<!--<li><?php //echo $this->Html->link(__('New Site'), array('controller' => 'sites', 'action' => 'add')); ?> </li>-->

		<?php }?>
		<li><?php //echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
		<!--  <li><?php //echo $this->Html->link(__('List Meeting People'), array('controller' => 'meeting_people', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Meeting Person'), array('controller' => 'meeting_people', 'action' => 'add')); ?> </li>-->
	</ul>
</div>
