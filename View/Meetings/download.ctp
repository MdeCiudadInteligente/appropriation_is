<?php
	$line=(array('meeting_date'=>"",'meeting_type'=>"",'meeting_title'=>"",'meeting_description'=>"",'meeting_commitments'=>"",'meeting_adjunct'=>"",'meeting_adjunct1'=>"",'meeting_adjunct2'=>""));
 	//$line= $meetings[0]['Meeting'];
 	$line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
 
 	//$this->Csv->addRow(array_keys($line));
	 
 	$meeting_date='Fecha de la reunión';
 	$meeting_type='Tipo de la reunión';
 	$meeting_title='Descripción de la reunión';
 	$meeting_description='Descripción de la reunión';
 	$meeting_commitments='Comentarios de la reunión';
 	$meeting_adjunct='Adjunto 1 de la reunión';
 	$meeting_adjunct1='Adjunto 2 de la reunión';
 	$meeting_adjunct2='Adjunto 3 de la reunión';
 	$site_name='Nombre de sitio';
 	$site_phone='Teléfono del sitio';
 	$site_address='Dirección del sitio';
 	$site_mail='Correo del sitio';
 	$neighborhood_name='Nombre del barrio';
 	$commune_name='Nombre de la comuna';
 	$site_type='Tipo de sitio';
 	$id_person='Cédula de la persona';
 	$name='Nombre';
 	$lastname='Apellido';
 	$email='Correo';
 	$charge='Cargo';
 	
 	
 	
 	//$line['id_meeting']=$id_meeting;
 	$line['meeting_date']=$meeting_date;
 	$line['meeting_type']=$meeting_type;
 	$line['meeting_title']=$meeting_title;
 	$line['meeting_description']=$meeting_description;
 	$line['meeting_commitments']=$meeting_commitments;
 	$line['meeting_adjunct']=$meeting_adjunct;
 	$line['meeting_adjunct1']=$meeting_adjunct1;
 	$line['meeting_adjunct2']=$meeting_adjunct2;
 	$line['site_name']=$site_name;
 	$line['site_phone']=$site_phone;
 	$line['site_address']=$site_address;
 	$line['site_mail']=$site_mail;
 	$line['neighborhood_name']=$neighborhood_name;
 	$line['commune_name']=$commune_name;
 	$line['site_type']=$site_type;
 	$line['id_person']=$id_person;
 	$line['name']=$name;
 	$line['lastname']=$lastname;
 	$line['email']=$email;
 	$line['charge']=$charge;
 	
 	$this->Csv->addRow($line);
 	foreach ($meetings as $meeting)
 	{
      //$line = $meeting['Meeting'];
      $line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
      
      //$id_meeting=$meeting['Meeting']['id_meeting'];
      $meeting_date=$meeting['Meeting']['meeting_date'];
      $meeting_type=$meeting['Meeting']['meeting_type'];
      $meeting_title=$meeting['Meeting']['meeting_title'];
      $meeting_description=$meeting['Meeting']['meeting_description'];
      $meeting_commitments=$meeting['Meeting']['meeting_commitments'];
      //$dir=$meeting['Meeting']['dir'];
      
   
      //$line['id_meeting']=$id_meeting;
      $line['meeting_date']=$meeting_date;
      $line['meeting_type']=$meeting_type;
      $line['meeting_title']=$meeting_title;
      $line['meeting_description']=$meeting_description;
      $line['meeting_commitments']=$meeting_commitments;
      //$line['dir']=$dir;
  
      foreach ($sites as $site)
      {
      	if ($site['Site']['id_site']==$meeting['Meeting']['site_id'])
      	{ 
	      	$site_name=$site['Site']['site_name'];
	      	$site_phone=$site['Site']['site_phone'];
	      	$site_address=$site['Site']['site_address'];
	      	$site_mail=$site['Site']['site_mail'];
	      	//debug($workshopSession);
	      	
	      	$line['site_name']=$site_name;
	      	$line['site_phone']=$site_phone;
	      	$line['site_address']=$site_address;
	      	$line['site_mail']=$site_mail;
      	}
      }
 
  foreach ($users as $user)
      {
      	if ($user['User']['id_user']==$meeting['Meeting']['user_id'])
      	{  
      		foreach ($agents as $agent)
      		{
      			if ($agent['Agent']['id_agent']==$user['User']['agent_id'])
      			{
      				foreach ($people as $person)
      				{
      					if ($person['Person']['id_person']==$agent['Agent']['person_id'])
      					{
					      	$id_person=$person['Person']['id_person'];
					      	$name=$person['Person']['name'];
					      	$lastname=$person['Person']['lastname'];					     
					      	$email=$person['Person']['email'];
					      	$charge=$person['Person']['charge'];
					      	
					        $line['id_person']=$id_person;
					      	$line['name']=$name;
					      	$line['lastname']=$lastname;					      	
					      	$line['email']=$email;
					      	$line['charge']=$charge;
      					}
      				}
      			}
      		}
      	}
      }
      
      //Inicializacion de array neighborhood ...
      $line['neighborhood_name']="";
          
      foreach($neighborhoods as $neighborhood)
      {
      	if ($neighborhood['Neighborhood']['id_neighborhood']==$site['Site']['neighborhood_id'])
      	{
	      	$neighborhood_name=$neighborhood['Neighborhood']['neighborhood_name'];
	      	
	      	$line['neighborhood_name']=$neighborhood_name;
      	}
      }
 
      foreach($site_types as $site_type)
      {
      	if ($site_type['SiteType']['id_site_type']==$site['Site']['site_type_id'])
      	{
      		$site_type=$site_type['SiteType']['site_type'];
      
      		$line['site_type']=$site_type;
      	}
      }
      
   
      //debug($line);
      
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='meetings';
 echo $this->Csv->render($filename);
?>