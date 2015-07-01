<?php
$Mee=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
 
 $line['Id']='Id';
 $line['Fecha']='Fecha de la Reunión';
 $line['Tipo_actividad']='Tipo Actividad';
 $line['Tipo_Reunion']='Tipo_Reunion';
 $line['Titulo']='Titulo';
 $line['Descripcion']='Descripcion';
 $line['Numero_Participantes']='Numero Participantes';
 $line['Compromisos']='Compromisos';
 $line['Sitio']='Sitio';
 $line['Barrio']='Barrio';
 $line['Comuna']='Comuna';
 $line['Adjunto1']='Adjunto1';
 $line['Adjunto2']='Adjunto2';
 $line['Adjunto3']='Adjunto3';
 
 
 
 
 $this->Csv->addRow($line);

 foreach ($Mee as $key => $Meet) { 
 	$line['Id']=$Meet['t1']['id_meeting'];
 	$line['Fecha']=$Meet['t1']['Fecha'];
 	$line['Tipo_actividad']=$Meet['0']['Tipo_actividad'];
 	$line['Tipo_Reunion']=$Meet['t5']['Tipo_Reunion'];
 	$line['Titulo']=$Meet['t1']['Titulo'];
 	$line['Descripcion']=$Meet['t1']['Descripcion'];
 	$line['Numero_Participantes']=$Meet['0']['Numero_Participantes'];
 	$line['Compromisos']=$Meet['t1']['Compromisos'];
 	$line['Sitio']=$Meet['t2']['Sitio'];
 	$line['Barrio']=$Meet['t3']['Barrio'];
 	$line['Comuna']=$Meet['t4']['Comuna'];
 	$line['Adjunto1']=$Meet['t1']['Adjunto1'];
 	$line['Adjunto2']=$Meet['t1']['Adjunto2'];
 	$line['Adjunto3']=$Meet['t1']['Adjunto3'];
 	$line=recursiveSanitize($line);
 	$this->Csv->addRow($line);
  } 
  
 $date=date('d-m-y');
 $filename='Reuniones_'.$date;
 echo  $this->Csv->render($filename);
 