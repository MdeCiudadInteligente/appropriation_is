
<?php

 $Mee=$this->request->data['results'];
 $this->Csv->delimiter='|';
 $this->Csv->enclosure =' ';

 var_dump($Mee);

 foreach ($Mee as $key => $Meet) { 
 	$this->Csv->addRow($line);
  } 
  
 $date=date('d-m-y');
 $filename='Reuniones_'.$date;
 echo  $this->Csv->render($filename);
