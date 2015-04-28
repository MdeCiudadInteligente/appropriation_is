

<?php 
	$menu_element=array(
			'custom_class'=>'meetings-internal-menu',
			'title'=>'Reuniones',
			'elements'=>array(
				array(
					"icon-class"=>'icon-doc-1',
					"route"=>Router::url( array('controller' => 'Meetings', 'action' => 'index'),true),
					"label" =>__('List Meetings'),
					"custom-class"=>'index-meetings'
				),
				array(
					"user_level"=>'1,2',
					"icon-class"=>'icon-pencil-1',
					"route"=>Router::url( array('controller' => 'Meetings', 'action' => 'add'),true),
					"label"=>__('New Meeting'),
					"custom-class"=>'add-meeting'
				)	
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
