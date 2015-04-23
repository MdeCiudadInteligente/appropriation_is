

<?php 
	$menu_element=array(
			'custom_class'=>'formation-internal-menu',
			'title'=>'Formación',
			'elements'=>array(
				array(
					"icon-class"=>'icon-doc-1',
					"route"=>Router::url( array('controller' => 'Trainings', 'action' => 'index'),true),
					"label" =>__('List Trainings'),
					"custom-class"=>'index-trainings'
				),
				array(
					"user_level"=>'1,2,3',
					"icon-class"=>'icon-pencil-1',
					"route"=>Router::url( array('controller' => 'Trainings', 'action' => 'add'),true),
					"label"=>__('New Training'),
					"custom-class"=>'add-training'
				  )	
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
