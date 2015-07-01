<?php
$Sens=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';

 $divulgation_date='Fecha de la sencibilización';
 $divulgation_tact='Tipo Actividad';
 $divulgation_ts='Tipo Sensibilización';
 $divulgation_tit='Título';
 $divulgation_desc='Descripción';
 $divulgation_npar='Número Participantes';
 $divulgation_tpobla='Tipo Población';
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
 $line['Tipo_sensibilizacion']=$divulgation_ts;
 $line['Titulo']=$divulgation_tit;
 $line['Descripcion']=$divulgation_desc;
 $line['Numero_participantes']=$divulgation_npar;
 $line['Tipo_poblacion']=$divulgation_tpobla;

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
 	$divulgation_ts=$Sensi['t5']['Tipo_sensibilizacion'];
 	$divulgation_tit=$Sensi['t1']['Titulo'];
 	$divulgation_desc=$Sensi['t1']['Descripcion'];
 	$divulgation_npar=$Sensi['t1']['Numero_participantes'];
 	$divulgation_tpobla=$Sensi['t6']['Tipo_poblacion'];
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
 	$line['Tipo_sensibilizacion']=$divulgation_ts;
 	$line['Titulo']=$divulgation_tit;
 	$line['Descripcion']=$divulgation_desc;
 	$line['Numero_participantes']=$divulgation_npar;
 	$line['Tipo_poblacion']=$divulgation_tpobla;
 	$line['Sitio']=$divulgation_si;
 	$line['Barrio']=$divulgation_ba;
 	$line['Comuna']=$divulgation_co;
 	$line['Formadores']=$divulgation_fo;
 	$line['Temáticas']=$divulgation_te;
 	$line['Adjunto1']=$divulgation_adu;
 	$line['Adjunto2']=$divulgation_add;
 	$line['Adjunto3']=$divulgation_adt;
	$line=recursiveSanitize($line);
 	$this->Csv->addRow($line);
  } 
  
 $date=date('d-m-y');
 $filename='sensibilizaciones_'.$date;
 echo  $this->Csv->render($filename);
 