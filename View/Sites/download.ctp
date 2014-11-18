<?php
 //$line= $sites[0]['Site'];
 $line= array_merge($line, array('id_site'=>"",'site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_id'=>"",'site_type_id'=>"",'syte_estado'=>""));

 $this->Csv->addRow(array_keys($line));
 
	 //Inicializacion de array site ...
	/* $line['id_site']="";
	 $line['site_name']="";
	 $line['site_phone']="";
	 $line['site_address']="";
	 $line['site_mail']="";
	 $line['neighborhood_id']="";
	 $line['site_type_id']="";
	 
	 $id_site='';
	 $site_name='';
	 $site_phone='';
	 $site_address='';
	 $site_mail='';
	 $neighborhood_id='';
	 $site_type_id='';
	 */
 foreach ($sites as $site)
 {
      //$line = $site['Site'];
      //$line= array_merge($line, array('id_site'=>"",'site_name'=>"",'site_phone'=>"",'site_address'=>"",'site_mail'=>"",'neighborhood_id'=>"",'site_type_id'=>""));
		/*if($site=="")
		{
			$line['id_site']="";
			$line['site_name']="";
			$line['site_phone']="";
			$line['site_address']="";
			$line['site_mail']="";
			$line['neighborhood_id']="";
			$line['site_type_id']="";
			
		}
		else {*/
     
      		$id_site=$site['Site']['id_site'];
      		$site_name=$site['Site']['site_name'];
      		$site_phone=$site['Site']['site_phone'];
      		$site_address=$site['Site']['site_address'];
      		$site_mail=$site['Site']['site_mail'];
      		$neighborhood_id=$site['Site']['neighborhood_id'];
      		$site_type_id=$site['Site']['site_type_id'];
      		$syte_estado=$site['Site']['syte_estado'];
      		//debug($workshopSession);
      		$line['id_site']=$id_site;
	      	$line['site_name']=$site_name;
	      	$line['site_phone']=$site_phone;
	      	$line['site_address']=$site_address;
	      	$line['site_mail']=$site_mail;
	      	$line['neighborhood_id']=$neighborhood_id;
	      	$line['site_type_id']=$site_type_id;   
	      	$line['syte_estado']=$syte_estado;
		
      //debug($line);

      
       $this->Csv->addRow($line);
       //debug($inscription);
 }
 
 $filename='Sitios';
 echo  $this->Csv->render($filename);
?>