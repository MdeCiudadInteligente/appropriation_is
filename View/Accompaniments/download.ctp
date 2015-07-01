<?php
$Acco=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
 $line= (array('Fecha'=>"",'Tipo_actividad'=>"",'Tipo_acompanamiento'=>"",'Titulo'=>"",'Descripcion'=>"",'Numero_Participantes'=>"",'Sitio'=>"",'Barrio'=>"",'Comuna'=>"",'Adjunto1'=>"",'Adjunto2'=>"",'Adjunto3'=>""));
 
 $accompaniment_date='Fecha del acompañamiento';
 $accompaniment_tact='Tipo Actividad';
 $accompaniment_tacc='Tipo Acompañamiento';
 $accompaniment_tit='Título';
 $accompaniment_desc='Descripción';
 $accompaniment_np='Número de Participantes';
 $accompaniment_si='Sitio';
 $accompaniment_ba='Barrio';
 $accompaniment_co='Comuna';
 $accompaniment_adu='Adjunto 1';
 $accompaniment_add='Adjunto 2';
 $accompaniment_adt='Adjunto 3';
 
 $line['Fecha']=$accompaniment_date;
 $line['Tipo_actividad']=$accompaniment_tact;
 $line['Tipo_acompanamiento']=$accompaniment_tacc;
 $line['Titulo']=$accompaniment_tit;
 $line['Descripcion']=$accompaniment_desc;
 $line['Numero_Participantes']=$accompaniment_np;
 $line['Sitio']=$accompaniment_si;
 $line['Barrio']=$accompaniment_ba;
 $line['Comuna']=$accompaniment_co;
 $line['Adjunto1']=$accompaniment_adu;
 $line['Adjunto2']=$accompaniment_add;
 $line['Adjunto3']=$accompaniment_adt;
 
 
 
 
 $this->Csv->addRow($line);

 foreach ($Acco as $key => $Accom) { 
 	$accompaniment_date=$Accom['t1']['Fecha'];
 	$accompaniment_tact=$Accom['0']['Tipo_actividad'];
 	$accompaniment_tacc=$Accom['t5']['Tipo_acompanamiento'];
 	$accompaniment_tit=$Accom['t1']['Titulo'];
 	$accompaniment_desc=$Accom['t1']['Descripcion'];
 	$accompaniment_np=$Accom['t1']['Numero_Participantes'];
 	$accompaniment_si=$Accom['t2']['Sitio'];
 	$accompaniment_ba=$Accom['t3']['Barrio'];
 	$accompaniment_co=$Accom['t4']['Comuna'];
 	$accompaniment_adu=$Accom['t1']['Adjunto1'];
 	$accompaniment_add=$Accom['t1']['Adjunto2'];
 	$accompaniment_adt=$Accom['t1']['Adjunto3'];
 	
 	
 	$line['Fecha']=$accompaniment_date;
 	$line['Tipo_actividad']=$accompaniment_tact;
 	$line['Tipo_acompanamiento']=$accompaniment_tacc;
 	$line['Titulo']=preg_replace( "/\r|\n/", "", str_replace(";",",", $accompaniment_tit) );
 	$line['Descripcion']=preg_replace( "/\r|\n/", "", str_replace(";",",", $accompaniment_desc) );
 	$line['Numero_Participantes']=$accompaniment_np;
 	$line['Sitio']=$accompaniment_si;
 	$line['Barrio']=$accompaniment_ba;
 	$line['Comuna']=$accompaniment_co;
 	$line['Adjunto1']=$accompaniment_adu;
 	$line['Adjunto2']=$accompaniment_add;
 	$line['Adjunto3']=$accompaniment_adt;
 	$line=recursiveSanitize($line);
 	$this->Csv->addRow($line);
  } 
  
 $date=date('d-m-y');
 $filename='acompanamientos_'.$date;
 echo  $this->Csv->render($filename);
 