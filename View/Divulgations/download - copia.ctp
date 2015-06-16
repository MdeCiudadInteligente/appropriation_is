<?php
$Sens=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
 $line= (array('Fecha'=>"",'Tipo_actividad'=>"",'Tipo_sensibilización'=>"",'Titulo'=>"",'Descripcion'=>"",'Numero_participantes'=>"",'Tipo_poblacion'=>"",'Sitio'=>"",'Barrio'=>"",'Comuna'=>"",'Formadores'=>"",'Temáticas'=>"",'Adjunto1'=>"",'Adjunto2'=>"",'Adjunto3'=>""));
 
 $divulgation_date='Fecha de la sencibilización';
 $divulgation_tact='Tipo Actividad';
 $divulgation_ts='Tipo Sensibilización';
 $divulgation_tit='Título';
 $divulgation_desc='Descripción';
 $divulgation_np='Número de Participantes';
 $divulgation_tp='Tipo Población';
 $divulgation_si='Sitio';
 $divulgation_ba='Barrio';
 $divulgation_co='Comuna';
 $divulgation_fo='Formadores';
 $divulgation_te='Temáticas';
 $divulgation_adu='Adjunto 1';
 $divulgation_add='Adjunto 2';
 $divulgation_adt='Adjunto 3';
 
 $line['Fecha']=$divulgation_date;
 $line['Tipo_actividad']=$divulgation_tact;
 $line['Tipo_sensibilización']=$divulgation_ts;
 $line['Titulo']=$divulgation_tit;
 $line['Descripcion']=$divulgation_desc;
 $line['Numero_Participantes']=$divulgation_np;
 $line['Tipo_Poblacion']=$divulgation_tp;
 $line['Sitio']=$divulgation_si;
 $line['Barrio']=$divulgation_ba;
 $line['Comuna']=$divulgation_co;
 $line['Formadores']=$divulgation_fo;
 $line['Temáticas']=$divulgation_te;
 $line['Adjunto1']=$divulgation_adu;
 $line['Adjunto2']=$divulgation_add;
 $line['Adjunto3']=$divulgation_adt;
 
 
 
 
 $this->Csv->addRow($line);

 foreach ($Sens as $key => $Sensi) { 
 	$divulgation_date=$Sensi['t1']['Fecha'];
 	$divulgation_tact=$Sensi['0']['Tipo_actividad'];
 	$divulgation_tacc=$Sensi['t5']['Tipo_sensibilización'];
 	$divulgation_tit=$Sensi['t1']['Titulo'];
 	$divulgation_desc=$Sensi['t1']['Descripcion'];
 	$divulgation_np=$Sensi['t1']['Numero_participantes'];
 	$divulgation_tp=$Sensi['t1']['Tipo_poblacion'];
 	$divulgation_si=$Sensi['t2']['Sitio'];
 	$divulgation_ba=$Sensi['t3']['Barrio'];
 	$divulgation_co=$Sensi['t4']['Comuna'];
 	$divulgation_fo=$Sensi['0']['Formadores'];
 	$divulgation_te=$Sensi['0']['Temáticas'];
 	$divulgation_adu=$Sensi['t1']['Adjunto1'];
 	$divulgation_add=$Sensi['t1']['Adjunto2'];
 	$divulgation_adt=$Sensi['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$divulgation_date;
 	$line['Tipo_actividad']=$divulgation_tact;
 	$line['Tipo_acompanamiento']=$divulgation_tacc;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $divulgation_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $divulgation_desc) );
 	$line['Numero_Participantes']=$divulgation_np;
 	$line['Tipo_poblacion']=$divulgation_tp;
 	$line['Sitio']=$divulgation_si;
 	$line['Barrio']=$divulgation_ba;
 	$line['Comuna']=$divulgation_co;
 	$line['Formadores']=$divulgation_fo;
 	$line['Temáticas']=$divulgation_te;
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
  
  
 $filename='Divulgations';
 echo  $this->Csv->render($filename);
 