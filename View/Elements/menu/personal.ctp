

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
				),
				array(
						"icon-class"=>'icon-comment-1',
						"route"=>Router::url( array('controller' => 'PerParticipants', 'action' => 'index'),true),
						"label" =>__('Participants'),
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'PerParticipants', 'action' => 'index'),true),
								"label"=>__('List Participants')
							),	
							array(
								"user_level"=>'1,2,3',
								"route"=>Router::url( array('controller' => 'PerParticipants', 'action' => 'add'),true),
								"label"=>__('New Participants')
							)	
						)
				),
				array(
						"icon-class"=>'icon-megaphone',
						"route"=>Router::url( array('controller' => 'PerTrainers', 'action' => 'index'),true),
						"label" =>__('Trainers'),
						"custom-class"=>'list-trainers',
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'PerTrainers', 'action' => 'index'),true),
								"label"=>__('List Trainers'),
								"custom-class"=>'list-trainers'
							),	
							array(
								"user_level"=>'1,2,3',
								"route"=>Router::url( array('controller' => 'PerTrainers', 'action' => 'add'),true),
								"label"=>__('New Trainer'),
								"custom-class"=>'add-trainers'
							)	
						)
				)
,
				array(
						"user_level"=>'1,4,5',
						"icon-class"=>'icon-cogs',
						"route"=>Router::url( array('controller' => 'PerTrainerTypes', 'action' => 'index'),true),
						"label" =>__('Trainer Types'),
						"custom-class"=>'Trainer-types',
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'PerTrainerTypes', 'action' => 'index'),true),
								"label"=>__('List Trainer Type'),
								"custom-class"=>'list-thematics'
							),	
							array(
								"user_level"=>'1',
								"route"=>Router::url( array('controller' => 'PerTrainerTypes', 'action' => 'add'),true),
								"label"=>__('New Trainer Type'),
								"custom-class"=>'add-thematics'
							)	
						)
				),
				array(
						"user_level"=>'1,4,5',
						"icon-class"=>'icon-cogs',
						"route"=>Router::url( array('controller' => ' PerTrainerFunds', 'action' => 'index'),true),
						"label" =>__('Per Trainer Funds'),
						"custom-class"=>'Trainer-types',
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => ' PerTrainerFunds', 'action' => 'index'),true),
								"label"=>__('List Per Trainer Funds'),
								"custom-class"=>'list-thematics'
							),	
							array(
								"user_level"=>'1',
								"route"=>Router::url( array('controller' => ' PerTrainerFunds', 'action' => 'add'),true),
								"label"=>__('New Per Trainer Fund'),
								"custom-class"=>'add-thematics'
							)	
						)
				),
				array(
						"user_level"=>'1,4,5',
						"icon-class"=>'icon-cogs',
						"route"=>Router::url( array('controller' => 'PerProfessions', 'action' => 'index'),true),
						"label" =>__('Professions'),
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'PerProfessions', 'action' => 'index'),true),
								"label"=>__('List Professions')
							),	
							array(
								"user_level"=>'1',
								"route"=>Router::url( array('controller' => 'PerProfessions', 'action' => 'add'),true),
								"label"=>__('New Profession')
							)	
						)
				),
				array(
						"user_level"=>'1,4,5',
						"icon-class"=>'icon-cogs',
						"route"=>Router::url( array('controller' => 'PerTypes', 'action' => 'index'),true),
						"label" =>__('People Types'),
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'PerTypes', 'action' => 'index'),true),
								"label"=>__('List People Types')
							),	
							array(
								"user_level"=>'1',
								"route"=>Router::url( array('controller' => 'PerTypes', 'action' => 'add'),true),
								"label"=>__('New People Types')
							)	
					)
				)					
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
