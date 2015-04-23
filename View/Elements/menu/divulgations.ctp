

<?php 
	$menu_element=array(
			'custom_class'=>'meetings-internal-menu',
			'title'=>'Sensibilizaciones',
			'elements'=>array(
				array(
					"icon-class"=>'icon-doc-1',
					"route"=>Router::url( array('controller' => 'Divulgations', 'action' => 'index'),true),
					"label" =>__('List Divulgations'),
					"custom-class"=>'index-divulgation'
				),
				array(
					"user_level"=>'1,2,3',
					"icon-class"=>'icon-pencil-1',
					"route"=>Router::url( array('controller' => 'Divulgations', 'action' => 'add'),true),
					"label"=>__('New Divulgation'),
					"custom-class"=>'add-divulgation'
				  )	
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
