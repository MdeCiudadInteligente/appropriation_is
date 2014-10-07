<?php
 $line= $meetings[0]['Meeting'];
 $line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'name'=>"",'lastname'=>""));
 
 $this->Csv->addRow(array_keys($line));
 
 foreach ($meetings as $meeting)
 {
      $line = $meeting['Meeting'];
      $line= array_merge($line, array('site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_name'=>"",'commune_name'=>"",'site_type'=>"",'name'=>"",'lastname'=>""));
      
      //$id_meeting=$meeting['Meeting']['id_meeting'];
      $meeting_date=$meeting['Meeting']['meeting_date'];
      $meeting_type=$meeting['Meeting']['meeting_type'];
      $meeting_tittle=$meeting['Meeting']['meeting_title'];
      $meeting_description=$meeting['Meeting']['meeting_description'];
      $meeting_commitments=$meeting['Meeting']['meeting_commitments'];
      $dir=$meeting['Meeting']['dir'];
      
   
      //$line['id_meeting']=$id_meeting;
      $line['meeting_date']=$meeting_date;
      $line['meeting_type']=$meeting_type;
      $line['meeting_tittle']=$meeting_tittle;
      $line['meeting_description']=$meeting_description;
      $line['meeting_commitments']=$meeting_commitments;
      $line['dir']=$dir;
    
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
      
      foreach ($meetings_people as $meeting_person)
      {
      	if ($meeting_person['MeetingsPerson']['meeting_id']==$meeting['Meeting']['id_meeting'])
      	{  
      		foreach ($people as $person)
      		{
      			if ($person['People']['id_person']==$meeting_person['MeetingsPerson']['person_id'])
      			{
			      	$id_person=$person['People']['id_person'];
			      	$name=$person['People']['name'];
			      	$lastname=$person['People']['lastname'];
			      	$email=$person['People']['email'];
			      	
			        $line['id_person']=$id_person;
			      	$line['name']=$name;
			      	$line['lastname']=$lastname;
			      	$line['email']=$email;
      			}
      		}
      	}
      }
      
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
 echo  $this->Csv->render($filename);
?>