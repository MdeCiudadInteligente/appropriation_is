<?php
 $line= $accompaniments[0]['Accompaniment'];
 $line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
 
 $this->Csv->addRow(array_keys($line));
	 
 foreach ($accompaniments as $accompaniment)
 {
      $line = $accompaniment['Accompaniment'];
      $line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'id_person'=>"",'name'=>"",'lastname'=>"",'email'=>"",'charge'=>""));
      
      //$id_meeting=$meeting['Meeting']['id_meeting'];
     /* $accompaniment_date=$accompaniment['Accompaniment']['accompaniment_date'];
      $accompaniment_type=$accompaniment['Accompaniment']['accompaniment_type'];
      $accompaniment_description=$accompaniment['Accompaniment']['accompaniment_description'];
      $participant_number=$accompaniment['Accompaniment']['participant_number'];
      //$meeting_commitments=$accompaniment['Accompaniment']['meeting_commitments'];
      $dir=$accompaniment['Accompaniment']['dir'];
      
   
      //$line['id_meeting']=$id_meeting;
      $line['meeting_date']=$accompaniment_date;
      $line['meeting_type']=$accompaniment_type;
      $line['meeting_title']=$accompaniment_description;
      $line['meeting_description']=$participant_number;
      //$line['meeting_commitments']=$meeting_commitments;
      $line['dir']=$dir;*/
  
      foreach ($sites as $site)
      {
      	if ($site['Site']['id_site']==$accompaniment['Accompaniment']['site_id'])
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
      
      //Inicializacion de array neighborhood ...
     // $line['neighborhood_name']="";
          
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
 
 $filename='Accompaniments';
 echo  $this->Csv->render($filename);
?>