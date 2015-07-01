<?php
$trai=$this->request->data['result'];
$this->Csv->delimiter='|';
$this->Csv->enclosure =' ';
 
 $training_cod='Código';
 $training_zon='Zonas';
 $training_co='Comunas';
 $training_bar='Barrios';
 $training_sit='Sitios';
 $training_tsit='Tipo Sitio';
 $training_lf='Lugar Formación';
 $training_tfor='Tipo Formación';
 $training_tem='Temáticas';
 $training_tipo='Tipo Población';
 $training_feini='Fecha Inicio';
 $training_fefin='Fecha Final';
 $training_estact='Estado Actual';
 $training_for='Formadores';
 $training_participants='participantes';
 $training_ali='Aliados';
 $training_pro='Procesos';
 $training_usu='Usuario';
 
 $line['Codigo']=$training_cod;
 $line['Zonas']=$training_zon;
 $line['Comunas']=$training_co;
 $line['Barrios']=$training_bar;
 $line['Sitios']=$training_sit;
 $line['Tipo_Sitio']=$training_tsit;
 $line['Lugar_Formacion']=$training_lf;
 $line['Tipo_Formacion']=$training_tfor;
 $line['Tematicas']=$training_tem;
 $line['Tipo_Poblacion']=$training_tipo;
 $line['Fecha_Inicio']=$training_feini;
 $line['Fecha_Final']=$training_fefin;
 $line['Estado_Actual']=$training_estact;
 $line['Formadores']=$training_for;
 $line['Aliados']=$training_ali;
 $line['Procesos']=$training_pro;
 $line['Usuario']=$training_usu;
 
 
 
 
 $this->Csv->addRow($line);

 foreach ($trai as $key => $train) { 
 	$training_cod=$train['t1']['Codigo'];
 	$training_zon=$train['0']['Zonas'];
 	$training_co=$train['0']['Comunas'];
 	$training_bar=$train['0']['Barrios'];
 	$training_sit=$train['0']['Sitios'];
 	$training_tsit=$train['0']['Tipo_Sitio'];
 	$training_lf=$train['0']['Lugar_Formacion'];
 	$training_tfor=$train['t2']['Tipo_Formacion'];
 	$training_tem=$train['0']['Tematicas'];
 	$training_tipo=$train['0']['Tipo_Poblacion'];
 	$training_feini=$train['t1']['Fecha_Inicio'];
 	$training_fefin=$train['t1']['Fecha_Final'];
 	$training_estact=$train['0']['Estado_Actual'];
 	$training_for=$train['0']['Formadores'];
 	$training_ali=$train['0']['Aliados'];
 	$training_pro=$train['0']['Procesos'];
 	$training_usu=$train['t3']['Usuario'];
 	
 	
 	$line['Codigo']=$training_cod;
 	$line['Zonas']=$training_zon;
 	$line['Comunas']=$training_co;
 	$line['Barrios']=$training_bar;
 	$line['Sitios']=$training_sit;
 	$line['Tipo_Sitio']=$training_tsit;
 	$line['Lugar_Formacion']=$training_lf;
 	$line['Tipo_Formacion']=$training_tfor;
 	$line['Tematicas']=$training_tem;
 	$line['Tipo_Poblacion']=$training_tipo;
 	$line['Fecha_Inicio']=$training_feini;
 	$line['Fecha_Final']=$training_fefin;
 	$line['Estado_Actual']=$training_estact;
 	$line['Formadores']=$training_for;
 	$line['Aliados']=$training_ali;
 	$line['Procesos']=$training_pro;
 	$line['Usuario']=$training_usu;
 	$line=recursiveSanitize($line);
 	$this->Csv->addRow($line);

  } 
  
 $date=date('d-m-y');
 $filename='Formaciones_'.$date;
 echo  $this->Csv->render($filename);
 