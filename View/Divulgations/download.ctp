<?php
 //$line=(array('divulgation_date'=>"",'divulgation_name'=>"",'divulgation_type'=>"",'divulgation_description'=>"",'participant_number'=>"",'activity_place'=>"",'divulgation_adjunct'=>"",'divulgation_adjunct1'=>"",'divulgation_adjunct2'=>""));

 $line= (array('commune_name'=>"",'site_type'=>"",'site_name'=>"")); 
 $line=array_merge($line,array('divulgation_date'=>"",'divulgation_description'=>""));
 //$line= $divulgations[0]['Divulgation'];
 //$this->Csv->addRow(array_keys($line));
 
 $divulgation_date='Fecha de divulgación';
 //$divulgation_name='Nombre de divulgación';
 //$divulgation_type='Tipo de divulgación';
 $divulgation_description='Descripción de la divulgación';
 //$participant_number='Número de participantes';
 //$activity_place='Lugar de la actividad';
 //$divulgation_adjunct='Adjunto 1 de la divulgación';
 //$divulgation_adjunct1='Adjunto 2 de la divulgación';
 //$divulgation_adjunct2='Adjunto 3 de la divulgación';
 $site_name='Nombre de sitio';
 //$site_phone='Teléfono del sitio';
 //$site_address='Dirección del sitio';
 //$site_mail='Correo del sitio';
 //$neighborhood_name='Nombre del barrio';
 $commune_name='Nombre de la comuna';
 $site_type='Tipo de sitio';
 //$id_person='Cédula de la persona';
 //$name='Nombre';
 //$lastname='Apellido';
 //$email='Correo';
 //$charge='Cargo';

 
  
 //$line['id_meeting']=$id_meeting;
 $line['divulgation_date']=$divulgation_date;
 //$line['divulgation_name']=$divulgation_name;
 //$line['divulgation_type']=$divulgation_type;
 $line['divulgation_description']=$divulgation_description;
 //$line['participant_number']=$participant_number;
 //$line['activity_place']=$activity_place;
 //$line['divulgation_adjunct']=$divulgation_adjunct;
 //$line['divulgation_adjunct1']=$divulgation_adjunct1;
// $line['divulgation_adjunct2']=$divulgation_adjunct2;
 $line['site_name']=$site_name;
 //$line['site_phone']=$site_phone;
 //$line['site_address']=$site_address;
 //$line['site_mail']=$site_mail;
 //$line['neighborhood_name']=$neighborhood_name;
 $line['commune_name']=$commune_name;
 $line['site_type']=$site_type;
 //$line['id_person']=$id_person;
 //$line['name']=$name;
 //$line['lastname']=$lastname;
 //$line['email']=$email;
 //$line['charge']=$charge;
 
 
 $this->Csv->addRow($line);
	 
 foreach ($divulgations as $divulgation)
 {
      //$line = $divulgation['Divulgation'];
      //$line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
 	  $line= array_merge($line, array('site_name'=>"",'commune_name'=>"",'site_type'=>""));
 		
      //$id_meeting=$meeting['Meeting']['id_meeting'];
      $divulgation_date=$divulgation['Divulgation']['divulgation_date'];
      //$divulgation_name=$divulgation['Divulgation']['divulgation_name'];
      //$divulgation_type=$divulgation['Divulgation']['divulgation_type'];
      $divulgation_description=$divulgation['Divulgation']['divulgation_description'];
      //$participant_number=$divulgation['Divulgation']['participant_number'];
      //$activity_place=$divulgation['Divulgation']['activity_place'];
      //$divulgation_adjunct=$divulgation['Divulgation']['divulgation_adjunct'];
      //$divulgation_adjunct1=$divulgation['Divulgation']['divulgation_adjunct1'];
      //$divulgation_adjunct2=$divulgation['Divulgation']['divulgation_adjunct2'];
      //$meeting_commitments=$accompaniment['Accompaniment']['meeting_commitments'];
      //$dir=$accompaniment['Accompaniment']['dir'];
      
       
      //$line['id_meeting']=$id_meeting;
      $line['divulgation_date']=$divulgation_date;
      //$line['divulgation_name']=$divulgation_name;
      //$line['divulgation_type']=$divulgation_type;
      $line['divulgation_description']=$divulgation_description;
      //$line['participant_number']=$participant_number;
      //$line['activity_place']=$activity_place;
      //$line['divulgation_adjunct']=$divulgation_adjunct;
      //$line['divulgation_adjunct1']=$divulgation_adjunct1;
      //$line['divulgation_adjunct2']=$divulgation_adjunct2;
      //$line['meeting_commitments']=$meeting_commitments;
      foreach ($sites as $site)
      {
      	if ($site['Site']['id_site']==$divulgation['Divulgation']['site_id'])
      	{ 
	      	$site_name=$site['Site']['site_name'];
	      	//$site_phone=$site['Site']['site_phone'];
	      	//$site_address=$site['Site']['site_address'];
	      	//$site_mail=$site['Site']['site_mail'];
	      	//debug($workshopSession);
	      	
	      	$line['site_name']=$site_name;
	      	//$line['site_phone']=$site_phone;
	      	//$line['site_address']=$site_address;
	      	//$line['site_mail']=$site_mail;
	      	
	      	//Inicializacion de array neighborhood ...
	      	// $line['neighborhood_name']="";
	      	
	      	foreach($neighborhoods as $neighborhood)
	      	{
	      		if ($neighborhood['Neighborhood']['id_neighborhood']==$site['Site']['neighborhood_id'])
	      		{
	      			//$neighborhood_name=$neighborhood['Neighborhood']['neighborhood_name'];
	      	
	      			//$line['neighborhood_name']=$neighborhood_name;
	      	
	      			foreach($communes as $commune)
	      			{
	      				if ($commune['Commune']['id_commune']==$neighborhood['Neighborhood']['commune_id'])
	      				{
	      					$commune_name=$commune['Commune']['commune_name'];
	      	
	      					$line['commune_name']=$commune_name;
	      				}
	      			}
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
      	}
      }
 /*
      foreach ($users as $user)
      {
      	if ($user['User']['id_user']==$divulgation['Divulgation']['user_id'])
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
 */     

 /*
      foreach($site_types as $site_type)
      {
      	if ($site_type['SiteType']['id_site_type']==$site['Site']['site_type_id'])
      	{
      		$site_type=$site_type['SiteType']['site_type'];
      
      		$line['site_type']=$site_type;
      	}
      }
  */    
   
      //debug($line);
      
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='Divulgations';
 echo  $this->Csv->render($filename);
?>