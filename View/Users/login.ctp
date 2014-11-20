<div id="login">
	<header>
		<img class="mde" src="<?php echo WEBROOT_DIR;?>/img/home-login.jpg">
		<article>
			<div class="green-bottom"></div>
			<div class="green-center-block">
				GRACIAS A TU LABOR,NUESTRA CIUDAD SE TRANSFORMA <label>EN UNA CIUDAD DE PERSONAS INTELIGENTES </label>
			</div>
		</article>
	</header>	

	<div class="users form">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User',array('autocomplete' => 'off')); ?>
	    <fieldset>
	        <header>
	            <?php echo __('¡Qué bueno que llegaste!'); ?>
	            <span><?php echo __('ingresa tu nombre de usuario y contraseña para poder ingresar'); ?></span>
	        </header>
	        <?php echo $this->Form->input('username');
	        echo $this->Form->input('password');
	    ?>
	    </fieldset>
	<?php echo $this->Form->end(__('Ingresar')); ?>
	</div>

</div>