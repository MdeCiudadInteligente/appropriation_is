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
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
			<h1><?php echo $this->Html->link($cakeDescription, 'http://localhost/appropriation_is/'); ?></h1>
		</div>
		<div id="content">
		<?php $usuario_level= $this->Session->read('Auth.User.permission_level');		//echo $usuario_level;
   		$this->set('usuario_level',$usuario_level);?>		 
		<?php if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1')
		{?>	
		<div id="session"> 
			<?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout'));?> 
		</div>
		<div id="bienvenida"> 		
				<?php $name_usuario = $this->Session->read('Auth.User.username');
		   		$this->set('name_usuario',$name_usuario);?>
				<?php echo "Bienvenido:". $name_usuario;?>		
		</div>
		<?php }?>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>			
		</div>	
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('LogoMDEpata.png', array('alt' => $cakeDescription, 'border' => '0')),
					'http://localhost/appropriation_is/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
