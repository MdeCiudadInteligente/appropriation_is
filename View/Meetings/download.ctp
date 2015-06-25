<?php
$Mee=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
 $line= (array('Fecha'=>"",'Tipo_actividad'=>"",'Tipo_Reunion'=>"",'Titulo'=>"",'Descripcion'=>"",'Numero_Participantes'=>"",'Compromisos'=>"",'Sitio'=>"",'Barrio'=>"",'Comuna'=>"",'Adjunto1'=>"",'Adjunto2'=>"",'Adjunto3'=>""));
 
 $meeting_date='Fecha de la Reunión';
 $meeting_tact='Tipo Actividad';
 $meeting_tacc='Tipo Reunión';
 $meeting_tit='Título';
 $meeting_desc='Descripción';
 $meeting_np='Número de Participantes';
 $meeting_comp='Compromisos';
 $meeting_si='Sitio';
 $meeting_ba='Barrio';
 $meeting_co='Comuna';
 $meeting_adu='Adjunto 1';
 $meeting_add='Adjunto 2';
 $meeting_adt='Adjunto 3';
 
 $line['Fecha']=$meeting_date;
 $line['Tipo_actividad']=$meeting_tact;
 $line['Tipo_Reunion']=$meeting_tacc;
 $line['Titulo']=$meeting_tit;
 $line['Descripcion']=$meeting_desc;
 $line['Numero_Participantes']=$meeting_np;
 $line['Compromisos']=$meeting_comp;
 $line['Sitio']=$meeting_si;
 $line['Barrio']=$meeting_ba;
 $line['Comuna']=$meeting_co;
 $line['Adjunto1']=$meeting_adu;
 $line['Adjunto2']=$meeting_add;
 $line['Adjunto3']=$meeting_adt;
 
 
 
 
 $this->Csv->addRow($line);

 foreach ($Mee as $key => $Meet) { 
 	$meeting_date=$Meet['t1']['Fecha'];
 	$meeting_tact=$Meet['0']['Tipo_actividad'];
 	$meeting_tacc=$Meet['t5']['Tipo_Reunion'];
 	$meeting_tit=$Meet['t1']['Titulo'];
 	$meeting_desc=$Meet['t1']['Descripcion'];
 	$meeting_np=$Meet['0']['Numero_Participantes'];
 	$meeting_comp=$Meet['t1']['Compromisos'];
 	$meeting_si=$Meet['t2']['Sitio'];
 	$meeting_ba=$Meet['t3']['Barrio'];
 	$meeting_co=$Meet['t4']['Comuna'];
 	$meeting_adu=$Meet['t1']['Adjunto1'];
 	$meeting_add=$Meet['t1']['Adjunto2'];
 	$meeting_adt=$Meet['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$meeting_date;
 	$line['Tipo_actividad']=$meeting_tact;
 	$line['Tipo_Reunion']=$meeting_tacc;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $meeting_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $meeting_desc) );
 	$line['Numero_Participantes']=$meeting_np;
 	$line['Compromisos']=preg_replace( "/\r|\n/", "", str_replace(";",",", $meeting_comp) );
 	$line['Sitio']=$meeting_si;
 	$line['Barrio']=$meeting_ba;
 	$line['Comuna']=$meeting_co;
 	$line['Adjunto1']=$meeting_adu;
 	$line['Adjunto2']=$meeting_add;
 	$line['Adjunto3']=$meeting_adt;
 	
 	$this->Csv->addRow($line);
 	/*
 	var_dump($line);
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";*/
  } 
  
  
 $filename='Meetings';
 echo  $this->Csv->render($filename);
 