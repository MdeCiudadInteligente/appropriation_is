<?php

 $data=$this->request->data['results'];
 $headers=$this->request->data['headers'];
 $filename=$this->request->data['filename'];
 $this->Csv->delimiter='|';
 $this->Csv->enclosure =' ';
///Add headers/////
 	$headers=recursiveSanitize($headers);
 	$this->Csv->addRow($headers);
 foreach ($data as $key => $line) { 
 	$line=recursiveSanitize($line);
 	$this->Csv->addRow($line);
 } 
 echo  $this->Csv->render($filename);
