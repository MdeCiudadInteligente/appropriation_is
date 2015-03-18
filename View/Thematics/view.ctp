<div class="thematics view">
<h2><?php echo __('Thematic'); ?></h2>
	<dl>
		<dt><?php echo __('Nombre temática'); ?></dt>
		<dd>
			<?php echo h($thematic['Thematic']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prefijo temática'); ?></dt>
		<dd>
			<?php echo h($thematic['Thematic']['prefix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripción'); ?></dt>
		<dd>
			<?php echo h($thematic['Thematic']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado temática'); ?></dt>
		<dd>
			<?php echo h($thematic['Thematic']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Main Menu'), array('controller' => 'activities', 'action' => 'index')); ?> </li> 
		<li><?php echo $this->Html->link(__('Edit Thematic'), array('action' => 'edit', $thematic['Thematic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('New Thematic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $thematic['Thematic']['id']), null, __('Seguro que quieres eliminar # %s?', $thematic['Thematic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Thematics'), array('action' => 'index')); ?> </li>
	</ul>
</div>
