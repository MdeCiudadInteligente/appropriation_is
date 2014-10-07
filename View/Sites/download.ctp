<?php
 $line= $sites[0]['Site'];
 $line= array_merge($line, array('id_site'=>"",'site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_id'=>"",'site_type_id'=>""));

 $this->Csv->addRow(array_keys($line));
 foreach ($sites as $site)
 {
      $line = $site['Site'];
      $line= array_merge($line, array('id_site'=>"",'site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_id'=>"",'site_type_id'=>""));

     
      		$id_site=$site['Site']['id_site'];
      		$site_name=$site['Site']['site_name'];
      		$site_phone=$site['Site']['site_phone'];
      		$site_address=$site['Site']['site_address'];
      		$site_mail=$site['Site']['site_mail'];
      		$neighborhood_id=$site['Site']['neighborhood_id'];
      		$site_type_id=$site['Site']['site_type_id'];
      		//debug($workshopSession);
      		$line['id_site']=$id_site;
	      	$line['site_name']=$site_name;
	      	$line['site_phone']=$site_phone;
	      	$line['site_address']=$site_address;
	      	$line['site_mail']=$site_mail;
	      	$line['neighborhood_id']=$neighborhood_id;
	      	$line['site_type_id']=$site_type_id;      
      

     /* foreach ($institutions as $institution){
      	$public_type_name=$institution['PublicType']['name'];
      	$id_responsible=$institution['Responsible']['id_responsible'];
      	/*$id_responsible=$institution['Responsible']['id_responsible'];
      	$responsible_name=$institution['Responsible']['name'];
      	$responsible_celular=$institution['Responsible']['celular'];
      	$responsible_mail=$institution['Responsible']['mail'];
      	*/
      	/*$line['Public_Type_name']=$public_type_name;
      	$line['id_responsible']=$id_responsible;
      	/*$line['id_responsible']=$id_responsible;
      	$line['responsible_name']=$responsible_name;
      	$line['responsible_celular']=$responsible_celular;
      	$line['responsible_mail']=$responsible_mail;*/
      //}

     /* $workshop_day=$institution['workshop_session']['workshop_day'];
      $workshop_time=$institution['workshop_session']['workshop_time'];
      $travel_time=$institution['workshop_session']['travel_time'];
      
      $line['workshop_day']=$workshop_day;
      $line['workshop_time']=$workshop_time;
      $line['travel_time']=$travel_time;*/
      

      //debug($line);

      
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='Sitios';
 echo  $this->Csv->render($filename);
?>