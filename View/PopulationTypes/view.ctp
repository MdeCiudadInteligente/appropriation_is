<div class="PopulationTypes view">
<h2><?php echo __('Population Type'); ?></h2>
	<dl>
		<dt><?php echo __('Population Type'); ?></dt>
		<dd>
			<?php echo h($populationType['PopulationType']['name']); ?>
			&nbsp;
		</dd>		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li> 
		<li><?php echo $this->Html->link(__('List Population Types'), array('action' => 'index')); ?> </li>
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');
		if ($usuario_level == '1'){?>	
		<li><?php echo $this->Html->link(__('Edit Population Type'), array('action' => 'edit', $populationType['PopulationType']['id_population_type'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $populationType['PopulationType']['id_population_type']), null, __('Are you sure you want to delete # %s?', $populationType['PopulationType']['id_population_type'])); ?> </li>	
		<li><?php echo $this->Html->link(__('New Population Type'), array('action' => 'add')); ?> </li>
	    <?php }?>	
	</ul>
</div>
