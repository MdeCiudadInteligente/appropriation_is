

<?php 
	$menu_element=array(
			'custom_class'=>'config-internal-menu',
			'title'=>'Configuración',
			'elements'=>array(
				array(
					"icon-class"=>'icon-user',
					"route"=>Router::url( array('controller' => 'Divulgation', 'action' => 'index'),true),
					"label" =>__('Users'),
					"custom-class"=>'users-meetings',
					"sub-elements"=>array(
						array(
							"route"=>Router::url( array('controller' => 'Users', 'action' => 'index'),true),
							"label"=>__('List Users'),
							"custom-class"=>'list-users'
						),	
						array(
							"route"=>Router::url( array('controller' => 'Users', 'action' => 'add'),true),
							"label"=>__('Add User'),
							"custom-class"=>'add-users'
						)	
					)
				),
				array(
					"icon-class"=>'icon-tag',
					"route"=>Router::url( array('controller' => 'Thematics', 'action' => 'index'),true),
					"label" =>__('Thematics'),
					"custom-class"=>'Thematics-meetings',
					"sub-elements"=>array(
						array(
							"route"=>Router::url( array('controller' => 'Thematics', 'action' => 'index'),true),
							"label"=>__('List Thematics'),
							"custom-class"=>'list-thematics'
						),	
						array(
							"route"=>Router::url( array('controller' => 'Thematics', 'Thematics' => 'add'),true),
							"label"=>__('Add Thematic'),
							"custom-class"=>'add-thematics'
						)	
					)
				)
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
