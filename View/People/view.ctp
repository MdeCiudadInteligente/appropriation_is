<div class="people view">
<h2><?php echo __('Person'); ?></h2>
	<dl>
		<dt><?php echo __('Id Person'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id_person']); ?>
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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id_person'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id_person']), null, __('Are you sure you want to delete # %s?', $person['Person']['id_person'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agents'), array('controller' => 'agents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agent'), array('controller' => 'agents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners'), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner'), array('controller' => 'owners', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Agents'); ?></h3>
	<?php if (!empty($person['Agent'])): ?>
		<dl>
			<dt><?php echo __('Id Agent'); ?></dt>
		<dd>
	<?php echo $person['Agent']['id_agent']; ?>
&nbsp;</dd>
		<dt><?php echo __('Person Id'); ?></dt>
		<dd>
	<?php echo $person['Agent']['person_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Zone Id'); ?></dt>
		<dd>
	<?php echo $person['Agent']['zone_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Agent'), array('controller' => 'agents', 'action' => 'edit', $person['Agent']['id_agent'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Owners'); ?></h3>
	<?php if (!empty($person['Owner'])): ?>
		<dl>
			<dt><?php echo __('Id Owner'); ?></dt>
		<dd>
	<?php echo $person['Owner']['id_owner']; ?>
&nbsp;</dd>
		<dt><?php echo __('Roll'); ?></dt>
		<dd>
	<?php echo $person['Owner']['roll']; ?>
&nbsp;</dd>
		<dt><?php echo __('Site Id'); ?></dt>
		<dd>
	<?php echo $person['Owner']['site_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Person Id'); ?></dt>
		<dd>
	<?php echo $person['Owner']['person_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Owner'), array('controller' => 'owners', 'action' => 'edit', $person['Owner']['id_owner'])); ?></li>
			</ul>
		</div>
	</div>
	