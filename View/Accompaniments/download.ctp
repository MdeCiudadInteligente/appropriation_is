<?php
 //$line=(array('accompaniment_date'=>"",'accompaniment_type'=>"",'accompaniment_description'=>"",'participant_number'=>"",'accompaniment_adjunct'=>"",'accompaniment_adjunct1'=>"",'accompaniment_adjunct2'=>""));
 
 //$line= $accompaniments[0]['Accompaniment'];
 //$line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
 
 
 $line= (array('commune_name'=>"",'site_type'=>"",'site_name'=>""));
 $line=array_merge($line, array('accompaniment_date'=>"",'accompaniment_description'=>""));
 
 //$line['id_accompaniment']="prueba";
 //$this->Csv->addRow(array_keys($line));
 
 $accompaniment_date='Fecha del acompañamiento';
 //$accompaniment_type='Tipo del acompañamiento';
 $accompaniment_description='Descripción del acompañamiento';
 //$participant_number='Número de participantes';
 //$accompaniment_adjunct='Adjunto 1 del acompañamiento';
 //$accompaniment_adjunct1='Adjunto 2 del acompañamiento';
 //$accompaniment_adjunct2='Adjunto 3 del acompañamiento';
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
 $line['accompaniment_date']=$accompaniment_date;
 //$line['accompaniment_type']=$accompaniment_type;
 $line['accompaniment_description']=$accompaniment_description;
 //$line['participant_number']=$participant_number;
 //$line['accompaniment_adjunct']=$accompaniment_adjunct;
 //$line['accompaniment_adjunct1']=$accompaniment_adjunct1;
 //$line['accompaniment_adjunct2']=$accompaniment_adjunct2;
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
	 
 foreach ($accompaniments as $accompaniment)
 {
      //$line = $accompaniment['Accompaniment'];
 	 
 	 //$line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
 	 //$line= array_merge($line, array('site_name'=>"",'commune_name'=>"",'site_type'=>""));
 	 
 	 
      //$id_meeting=$meeting['Meeting']['id_meeting'];
      $accompaniment_date=$accompaniment['Accompaniment']['accompaniment_date'];
      //$accompaniment_type=$accompaniment['Accompaniment']['accompaniment_type'];
      $accompaniment_description=$accompaniment['Accompaniment']['accompaniment_description'];
      $participant_number=$accompaniment['Accompaniment']['participant_number'];
      //$accompaniment_adjunct=$accompaniment['Accompaniment']['accompaniment_adjunct'];
      //$accompaniment_adjunct1=$accompaniment['Accompaniment']['accompaniment_adjunct1'];
      //$accompaniment_adjunct2=$accompaniment['Accompaniment']['accompaniment_adjunct2'];
      //$meeting_commitments=$accompaniment['Accompaniment']['meeting_commitments'];
      //$dir=$accompaniment['Accompaniment']['dir'];
      
   
      //$line['id_meeting']=$id_meeting;
      $line['accompaniment_date']=$accompaniment_date;
      //$line['accompaniment_type']=$accompaniment_type;
      $line['accompaniment_description']=$accompaniment_description;
      //$line['participant_number']=$participant_number;
      //$line['accompaniment_adjunct']=$accompaniment_adjunct;
      //$line['accompaniment_adjunct1']=$accompaniment_adjunct1;
      //$line['accompaniment_adjunct2']=$accompaniment_adjunct2;
      //$line['meeting_commitments']=$meeting_commitments;
      //$line['dir']=$dir;
  
      foreach ($sites as $site)
      {
      	if ($site['Site']['id_site']==$accompaniment['Accompaniment']['site_id'])
      	{ 
	      	$site_name=$site['Site']['site_name'];
	      	//$site_phone=$site['Site']['site_phone'];
	      	//$site_address=$site['Site']['site_address'];
	      	//$site_mail=$site['Site']['site_mail'];
	      	//debug($workshopSession);
	      	
	      	foreach($site_types as $site_type)
	      	{
	      		if ($site_type['SiteType']['id_site_type']==$site['Site']['site_type_id'])
	      		{
	      			$site_type=$site_type['SiteType']['site_type'];
	      	
	      			$line['site_type']=$site_type;
	      		}
	      	}
	      	
	      	$line['site_name']=$site_name;
	      	//$line['site_phone']=$site_phone;
	      	//$line['site_address']=$site_address;
	      	//$line['site_mail']=$site_mail;
      	}
      }
/*
      foreach ($users as $user)
      {
      	if ($user['User']['id_user']==$accompaniment['Accompaniment']['user_id'])
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
 
 $filename='Accompaniments';
 echo  $this->Csv->render($filename);
?>