<?php
$Acc=$this->request->data['result'];
$Sens=$this->request->data['results'];
$Mee=$this->request->data['resultm'];
$trai=$this->request->data['resultt'];


$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
$line= (array('Fecha'=>"",'Tipo_actividad'=>"",'Tipo'=>"",'Titulo'=>"",'Descripcion'=>"",'numero_participantes'=>"",'Sitio'=>"",'Barrio'=>"",'Comuna'=>"",'Adjunto1'=>"",'Adjunto2'=>"",'Adjunto3'=>""));
 
 $activity_date='Fecha de la sencibilización';
 $activity_tact='Tipo Actividad';
 $activity_ts='Tipo';
 $activity_tit='Título';
 $activity_desc='Descripción';
 $activity_np='Número de Participantes';
 $activity_si='Sitio';
 $activity_ba='Barrio';
 $activity_co='Comuna';
 $activity_adu='Adjunto 1';
 $activity_add='Adjunto 2';
 $activity_adt='Adjunto 3';
 
 $line['Fecha']=$activity_date;
 $line['Tipo_actividad']=$activity_tact;
 $line['Tipo']=$activity_ts;
 $line['Titulo']=$activity_tit;
 $line['Descripcion']=$activity_desc;
 $line['numero_participantes']=$activity_np;
 $line['Sitio']=$activity_si;
 $line['Barrio']=$activity_ba;
 $line['Comuna']=$activity_co;
 $line['Adjunto1']=$activity_adu;
 $line['Adjunto2']=$activity_add;
 $line['Adjunto3']=$activity_adt;
 
 $this->Csv->addRow($line);

 foreach ($Acc as $key => $Acco) { 
 	$accomp_date=$Acco['t1']['Fecha'];
 	$accomp_tact=$Acco['0']['Tipo_actividad'];
 	$accomp_tipo=$Acco['t5']['Tipo'];
 	$accomp_tit=$Acco['t1']['Titulo'];
 	$accomp_desc=$Acco['t1']['Descripcion'];
 	$accomp_np=$Acco['t1']['numero_participantes'];
 	$accomp_si=$Acco['t2']['Sitio'];
 	$accomp_ba=$Acco['t3']['Barrio'];
 	$accomp_co=$Acco['t4']['Comuna'];
 	$accomp_adu=$Acco['t1']['Adjunto1'];
 	$accomp_add=$Acco['t1']['Adjunto2'];
 	$accomp_adt=$Acco['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$accomp_date;
 	$line['Tipo_actividad']=$accomp_tact;
 	$line['Tipo']=$accomp_tipo;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $accomp_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $accomp_desc) );
 	$line['numero_participantes']=$accomp_np;
 	$line['Sitio']=$accomp_si;
 	$line['Barrio']=$accomp_ba;
 	$line['Comuna']=$accomp_co;
 	$line['Adjunto1']=$accomp_adu;
 	$line['Adjunto2']=$accomp_add;
 	$line['Adjunto3']=$accomp_adt;
 	
 	$this->Csv->addRow($line);

 	/*
 	var_dump($line);
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";*/
 } 
  
  

foreach ($Sens as $key => $Sensi) { 
 	$divulgation_date=$Sensi['t1']['Fecha'];
 	$divulgation_tact=$Sensi['0']['Tipo_actividad'];
 	$divulgation_ts=$Sensi['t5']['Tipo'];
 	$divulgation_tit=$Sensi['t1']['Titulo'];
 	$divulgation_desc=$Sensi['t1']['Descripcion'];
 	$divulgation_np=$Sensi['t1']['numero_participantes'];
 	$divulgation_si=$Sensi['t2']['Sitio'];
 	$divulgation_ba=$Sensi['t3']['Barrio'];
 	$divulgation_co=$Sensi['t4']['Comuna'];
 	$divulgation_adu=$Sensi['t1']['Adjunto1'];
 	$divulgation_add=$Sensi['t1']['Adjunto2'];
 	$divulgation_adt=$Sensi['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$divulgation_date;
 	$line['Tipo_actividad']=$divulgation_tact;
 	$line['Tipo']=$divulgation_ts;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $divulgation_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $divulgation_desc) );
 	$line['numero_participantes']=$divulgation_np;
 	$line['Sitio']=$divulgation_si;
 	$line['Barrio']=$divulgation_ba;
 	$line['Comuna']=$divulgation_co;
 	$line['Adjunto1']=$divulgation_adu;
 	$line['Adjunto2']=$divulgation_add;
 	$line['Adjunto3']=$divulgation_adt;
 	
 	$this->Csv->addRow($line);
 	/*
 	var_dump($line);
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";*/
  } 
  
   foreach ($Mee as $key => $Meet) { 
 	$meeting_date=$Meet['t1']['Fecha'];
 	$meeting_tact=$Meet['0']['Tipo_actividad'];
 	$meeting_tacc=$Meet['t5']['Tipo'];
 	$meeting_tit=$Meet['t1']['Titulo'];
 	$meeting_desc=$Meet['t1']['Descripcion'];
 	$meeting_np=$Meet['0']['numero_participantes'];
 	$meeting_si=$Meet['t2']['Sitio'];
 	$meeting_ba=$Meet['t3']['Barrio'];
 	$meeting_co=$Meet['t4']['Comuna'];
 	$meeting_adu=$Meet['t1']['Adjunto1'];
 	$meeting_add=$Meet['t1']['Adjunto2'];
 	$meeting_adt=$Meet['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$meeting_date;
 	$line['Tipo_actividad']=$meeting_tact;
 	$line['Tipo']=$meeting_tacc;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $meeting_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $meeting_desc) );
 	$line['numero_participantes']=$meeting_np;
 	$line['Sitio']=$meeting_si;
 	$line['Barrio']=$meeting_ba;
 	$line['Comuna']=$meeting_co;
 	$line['Adjunto1']=$meeting_adu;
 	$line['Adjunto2']=$meeting_add;
 	$line['Adjunto3']=$meeting_adt;
  
  	$this->Csv->addRow($line);
  	 
  }
  
   foreach ($trai as $key => $train) { 
   	$training_feini=$train['t1']['Fecha_Inicio'];
   	$training_tact=$train['0']['Tipo_actividad'];
   	$training_tipo=$train['t2']['Tipo'];
  	$training_cod=$train['t1']['Titulo'];
  	$training_desc=$train['t1']['Descripcion'];
  	$training_np=$train['0']['numero_participantes'];
  	$training_sit=$train['0']['Sitio'];
  	$training_bar=$train['0']['Barrio'];
 	$training_co=$train['0']['Comuna'];
 	$training_adu=$train['0']['Adjunto1'];
 	$training_add=$train['0']['Adjunto2'];
 	$training_adt=$train['0']['Adjunto3'];
 
 	
 	
 	$line['Fecha']=$training_feini;
 	$line['Tipo_actividad']=$training_tact;
 	$line['Tipo']=$training_tipo;
 	$line['Titulo']=$training_cod;
 	$line['Descripcion']=$training_desc;
 	$line['numero_participantes']=$training_np;
 	$line['Sitio']=preg_replace( "/\r|\n/", "", str_replace(";",",", $training_sit) );
 	$line['Barrio']=preg_replace( "/\r|\n/", "", str_replace(";",",", $training_bar) );
 	$line['Comuna']=$training_co;
 	$line['Adjunto1']=$training_adu;
 	$line['Adjunto2']=$training_add;
 	$line['Adjunto3']=$training_adt;
 	
  	$this->Csv->addRow($line);
  
  }
  
 $filename='Completo';
 echo  $this->Csv->render($filename);
 ?>