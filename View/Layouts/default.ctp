<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400' rel='stylesheet' type='text/css'>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>

	<script type="text/javascript">
		<?php echo "var absPath='".Router::url( '/', true )."';"; ?>
		<?php echo "var personService='". $this->Html->url(array('controller'=>'People','action' => 'getPerson', 'ext' => 'json'))."';"; ?>
	</script>

	<?php		
		echo $this->Html->css('main');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('autoSuggest');
		echo $this->Html->meta('webroot/favicon.ico',array('type' => 'icon'));
		echo $this->fetch('script');
	?>


	<?php echo $this->Html->script('jquery-1.11.1.min');?>
	<?php echo $this->Html->script('jquery-ui.min');?>
	<?php echo $this->Html->script('jquery.autoSuggest');?>
	<?php echo $this->Html->script('main');?>
	
</head>
<body>
	<div id="container" class="app-container">	
		<div id="header">
			<div class="top-head">
				<section>
					<span><img class="mde" src="<?php echo WEBROOT_DIR;?>/img/mde-10.png"></span>
					<span><img class="mde" src="<?php echo WEBROOT_DIR;?>/img/alcaldia-09.png"></span>
				</section>
			</div>	
			<div class="bottom-head">
				<section>
					<span><img class="mde" src="<?php echo WEBROOT_DIR;?>/img/intranet.png"></span>
					<span class="cerrar-icon session">
						<?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout'));?> 
					</span>
				</section>
			</div>
		</div>
		<div id="content">
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		//echo $usuario_level;
   		$this->set('usuario_level',$usuario_level);?>		 
		<?php if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1')
		{?>	
		<div id="bienvenida"> 		
				<?php $name_usuario = $this->Session->read('Auth.User.username');
		   		$this->set('name_usuario',$name_usuario);?>
				<?php echo "Bienvenido:". $name_usuario;?>		
		</div>
		<?php }?>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>		
			<div class="spacer" style="clear: both;"></div>	
		</div>	
		<div id="footer">
				<div class="foot-info"><div><span>Dirección: Carrera 43b #11-10 Piso 2, Medellin - Antioquia.</span><span>Télefono: (4) 4444963</span><span>Email: comunicaciones@medellindigital.gov.co</span></div></div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
