

<?php 
	$menu_element=array(
			'custom_class'=>'personal-internal-menu',
			'title'=>'Personal',
			'elements'=>array(
				array(
					"icon-class"=>'icon-doc-1',
					"route"=>Router::url( array('controller' => 'People', 'action' => 'index'),true),
					"label" =>__('List Persons'),
					"custom-class"=>'index-person'
				),
				array(
					"user_level"=>'1,2,3',
					"icon-class"=>'icon-pencil-1',
					"route"=>Router::url( array('controller' => 'People', 'action' => 'add'),true),
					"label"=>__('New Person'),
					"custom-class"=>'add-person'
				  )	
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
