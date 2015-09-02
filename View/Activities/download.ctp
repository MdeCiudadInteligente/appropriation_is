<?php


$Acc=$this->request->data['result'];
$Sens=$this->request->data['results'];
$Mee=$this->request->data['resultm'];
$trai=$this->request->data['resultt'];


$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';


 $line['Fecha']='Fecha';
 $line['Comuna']='Comuna';
 $line['Barrio']='Barrio';
 $line['tipo_sitio']='Tipo de Sitio';
 $line['Sitio']='Sitio';
 $line['Tipo_actividad']='Tipo Actividad';
 $line['Tipo']='Tipo de acompañamiento';
 $line['Titulo']='Título';
 $line['Descripcion']='Descripción';
 $line['numero_participantes']='Número de Participantes';
 
 $this->Csv->addRow($line);

 foreach ($Acc as $key => $Acco) { 
 	$line['Fecha']=$Acco['t1']['Fecha'];
 	$line['Comuna']=$Acco['t4']['Comuna'];
  $line['Barrio']=$Acco['t3']['Barrio'];
  $line['tipo_sitio']=$Acco['t6']['tipo_sitio'];
  $line['Sitio']=$Acco['t2']['Sitio'];
  $line['Tipo_actividad']=$Acco['0']['Tipo_actividad'];
  $line['Tipo']=$Acco['t5']['Tipo'];
  $line['Titulo']=$Acco['t1']['Titulo'];
  $line['Descripcion']=$Acco['t1']['Descripcion'];
  $line['numero_participantes']=$Acco['t1']['numero_participantes'];
  $line=recursiveSanitize($line);
  $this->Csv->addRow($line);
 } 
  
foreach ($Sens as $key => $Sensi) { 
 	
 	$line['Fecha']=$Sensi['t1']['Fecha'];
 	$line['Comuna']=$Sensi['t4']['Comuna'];
  $line['Barrio']=$Sensi['t3']['Barrio'];
  $line['tipo_sitio']=$Sensi['t6']['tipo_sitio'];
  $line['Sitio']=$Sensi['t2']['Sitio'];
  $line['Tipo_actividad']=$Sensi['0']['Tipo_actividad'];
  $line['Tipo']=$Sensi['t5']['Tipo'];
  $line['Titulo']=$Sensi['t1']['Titulo'];
  $line['Descripcion']=$Sensi['t1']['Descripcion'];
  $line['numero_participantes']=$Sensi['t1']['numero_participantes'];
 	
  $line=recursiveSanitize($line);
  $this->Csv->addRow($line);

  } 
  
  foreach ($Mee as $key => $Meet) { 
   	$line['Fecha']=$Meet['t1']['Fecha'];
   	$line['Comuna']=$Meet['t4']['Comuna'];
    $line['Barrio']=$Meet['t3']['Barrio'];
    $line['tipo_sitio']=$Meet['t6']['tipo_sitio'];
    $line['Sitio']=$Meet['t2']['Sitio'];
    $line['Tipo_actividad']=$Meet['0']['Tipo_actividad'];
    $line['Tipo']=$Meet['t5']['Tipo'];
    $line['Titulo']=$Meet['t1']['Titulo'];
    $line['Descripcion']=$Meet['t1']['Descripcion'];
    $line['numero_participantes']=$Meet['0']['numero_participantes'];
    $line=recursiveSanitize($line);
    $this->Csv->addRow($line);
  }
  
   foreach ($trai as $key => $train) { 
   	$line['Fecha']=$train['t1']['Fecha_Final'];
    $line['Comuna']=$train['0']['Comuna'];
    $line['Barrio']=$train['0']['Barrio'];
    $line['tipo_sitio']=$train['t6']['tipo_sitio'];
    $line['Sitio']=$train['0']['Sitio'];
    $line['Tipo_actividad']=$train['0']['Tipo_actividad'];
    $line['Tipo']=$train['t2']['Tipo'];
    $line['Titulo']=$train['t1']['Titulo'];
    $line['Descripcion']=$train['t1']['Descripcion'];
    $line['numero_participantes']=$train['0']['numero_participantes'];
   	
    $line=recursiveSanitize($line);
    $this->Csv->addRow($line);
  }
 $date=date('d-m-y');
 $filename='Completo_'.$date;
 echo  $this->Csv->render($filename);
 ?>