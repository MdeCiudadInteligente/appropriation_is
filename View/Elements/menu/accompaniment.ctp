

<?php 
	$menu_element=array(
			'custom_class'=>'acompaniment-internal-menu',
			'title'=>'Acompañamientos',
			'elements'=>array(
				array(
					"icon-class"=>'icon-doc-1',
					"route"=>Router::url( array('controller' => 'Accompaniments', 'action' => 'index'),true),
					"label" =>__('List Accompaniments'),
					"custom-class"=>'index-accompamiment'
				),
				array(
					"user_level"=>'1,2',
					"icon-class"=>'icon-pencil-1',
					"route"=>Router::url( array('controller' => 'Accompaniments', 'action' => 'add'),true),
					"label"=>__('New Accompaniment'),
					"custom-class"=>'add-accompamiment'
				  )	
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
