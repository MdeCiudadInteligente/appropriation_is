<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Person'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($person['Person']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Charge'); ?></dt>
		<dd>
			<?php echo h($person['Person']['charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo'); ?></dt>
		<dd>
		<?php echo h($person['Person']['email']); ?>
		&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell'); ?></dt>
		<dd>
			<?php echo h($person['Person']['cell']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity'); ?></dt>
		<dd>
			<?php echo h($person['Person']['entity']); ?>
			&nbsp;
		</dd>

		<div class="input text" id="terms_checkbox_view">
			<?php

			$options=array(
	    	'value' => $person['Person']['terms'],
	    	'type'=>'checkbox',
	    	'class'=>'input_terminos',
	    	'label'=>'Aceptó el habeas data',
	    	);
	    	

			if($person['Person']['terms']){
				$options['checked']='checked';	
			}


			echo $this->Form->input('terms',$options);
	    	?>
	    </div>	
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1' || $usuario_level == '2'){?>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id_person'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<?php }?>
		
	</ul>
</div>
