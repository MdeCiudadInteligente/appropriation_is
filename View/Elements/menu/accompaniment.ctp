

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
				  ),
				array(
						"user_level"=>'1',
						"icon-class"=>'icon-cogs',
						"route"=>Router::url( array('controller' => 'AccTypes', 'action' => 'index'),true),
						"label" =>__('AccTypes'),
						"sub-elements"=>array(
							array(
								"route"=>Router::url( array('controller' => 'AccTypes', 'action' => 'index'),true),
								"label"=>__('List AccTypes')
							),	
							array(
								"route"=>Router::url( array('controller' => 'AccTypes', 'action' => 'add'),true),
								"label"=>__('New AccType')
							)	
						)
				),
				array(
					"user_level"=>'1',
					"icon-class"=>'icon-chart',
					"route"=>Router::url( array('controller' => 'Accompaniments', 'action' => 'download'),true),
					"label" =>__('Descargar Reporte'),
					"custom-class"=>'report-csv'
				)
		    )
		);
?>

<?php echo $this->element('menu/walker',array('menu_element'=>$menu_element));?>
