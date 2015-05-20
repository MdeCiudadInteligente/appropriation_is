<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$usuario_level= $this->Session->read('Auth.User.permission_level');		//echo $usuario_level;
$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo Router::url( '/', true );?>/webroot/js/ext/resources/css/ext-all.css" />
	<link rel="stylesheet" href="<?php echo Router::url( '/', true );?>/webroot/css/bootstrap.min.css" />
	<title>
		<?php $title_for_layout='S.I. MDE Ciudad Inteligente';?>
		<?php echo $cakeDescription ?>
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
	<?php echo $this->Html->script('ext/adapter/jquery/ext-jquery-adapter.js');?>
	<?php echo $this->Html->script('ext/ext-all-debug-w-comments.js');?>
	<?php echo $this->Html->script('ext/RowExpander.js');?>
	<?php echo $this->Html->script('ext/src/locale/ext-lang-es.js');?>
	<?php $body_class=( Configure::read('debug')>0)?'debugging':'production';?>
</head>
<body>
	<?php echo $this->Session->flash(); ?>
	<!-- <i class="icon-align-justify open-menu"></i> -->
	<?php  
	 	if($usuario_level){
	 		echo $this->element('main-menu');
		}
	 ?>	
	<nav class="mobile-ovelay-menu menu-content">
		<header>
		 <i class="icon-left close-menu"></i>	
		 <a href="<?php echo Router::url( '/', true )?>"><img src="<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/intranet.png"></a>
		</header>
		<section>
		</section>
	</nav>

	<aside id="right-content-aside" class="mobile-ovelay-menu right-display">
		<header>
		 <i class="icon-right close-menu"></i>	
		 <a href="<?php echo Router::url( '/', true )?>"><img src="<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/intranet.png"></a>
		</header>
		<article class="main-content">

		</article>
	</aside>	

	<aside id="bottom-content-aside" class="mobile-ovelay-menu bottom-display">
		<header>
		 <i class="icon-right close-menu"></i>	
		 <a href="<?php echo Router::url( '/', true )?>"><img src="<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/intranet.png"></a>
		</header>
		<article class="main-content">

		</article>
	</aside>	

	<div id="container" class="app-container <?php echo $body_class ?>">	
		<div id="header">
			<div class="top-head" style="background-image:url('<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/header.png')">
					<img class="mde" src="<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/LogoMDEpata.png">
			</div>	
			<div class="bottom-head">
				<section>
					<?php if($usuario_level){ ?>
					<span><img class="mde mde-intranet-logo" src="<?php echo Router::url( '/', true ).WEBROOT_DIR;?>/img/intranet.png"></span>
					<span class="cerrar-icon session">
						<?php echo $this->Html->link(__('Close Section'), array('controller' => 'users', 'action' => 'logout'));?> 
					</span>
					<?php } ?> 
				</section>
			</div>
		</div>
		<div id="content">
   		<?php $this->set('usuario_level',$usuario_level);?>		 
		<?php if ($usuario_level == '3'||$usuario_level == '2'||$usuario_level == '1')
		{?>	
		<div id="bienvenida"> 		
				<?php $name_usuario = $this->Session->read('Auth.User.username');
		   		$this->set('name_usuario',$name_usuario);?>
				<?php echo "Bienvenido:". $name_usuario;?>		
		</div>
		<?php }?>
			<?php echo $this->fetch('content'); ?>		
			<div class="spacer" style="clear: both;"></div>	
		</div>	
		<div id="footer">
				<div class="foot-info"><div><span>Dirección: Carrera 43b #11-10 Piso 2, Medellin - Antioquia.</span><span>Télefono: (4) 4444963</span><span>Email: comunicaciones@medellindigital.gov.co</span></div></div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
<footer>
		<?php echo $this->Html->script('main');?>
		<?php echo $this->Html->script('bootstrap.min');?>
		<?php echo $this->Html->script('jquery.waypoints.min');?>
<footer>	
</html>
