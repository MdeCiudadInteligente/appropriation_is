<?php

App::uses('AppController', 'Controller');
App::import('Controller', 'Upload');


class UploadRouteHandlerController extends AppController {
    
    private $UploadController;
    
    private $allowedModels=array('Session');

    private $createdDir=null;

    private $allowedMethodRouter=array(
        'Session'=>array(
            'params'=>array('session_id'),
            'method'=>'SessionRouting'
        )
    );
    
    public function createDir($model,$saveScope){
        try{
            $this->UploadController = new UploadController();
            if(!in_array($model, $this->allowedModels)){
                   throw new Exception('Model Not Allowed For Dir Creation ('.$model.')'); 
            }else{
                $allowedScopeData=$this->allowedMethodRouter[$model];
                if(!in_array($saveScope['key'], $allowedScopeData['params'])){
                   throw new Exception('Save Scope not allowed('.$saveScope['key'].')');  
                }else{
                    $method=$allowedScopeData['method'];
                    $valSaveScope=$saveScope['value'];
                    eval('$dir=$this->'.$method.'($valSaveScope);');
                    if(!$dir){
                      throw new Exception('Could not create a valid  directory'.$dir);  
                    }else{
                        return $dir;
                    }    
                }
            }
        } catch(Exception $e) {
            return $e;
        }       
    }

    public function getDir(){
        return $this->createdDir;
    }


    public function getDataSource(){
        $db = $this->UploadController->Upload->getDataSource();
        return $db;
    }

    public function SessionRouting($session_id){
        $db=$this->getDataSource(); 
        $dir=$db->fetchAll(
                "SELECT CONCAT(tra_types.name,'_',training.code,'_',sites.site_name,'_',training.id) as training_dir, 
                    CONCAT(session.start_date,'_',session.activity_place,'_') as session_prefix 
                    FROM tra_session as session, training , tra_types ,sites ,sites_trainings
                    WHERE session.training_id=training.id
                    AND   training.type_id=tra_types.id
                    AND   sites_trainings.training_id=training.id
                    AND   sites_trainings.site_id=sites.id_site
                    AND   session.id=:session_id
                    GROUP BY (training.id)
                    LIMIT 1
                ",
                array('session_id' => $session_id)
        );
        $dirName=$this->sanitizeFolderName($dir[0][0]['training_dir']);
        $prefixName=$this->sanitizeFolderName($dir[0][0]['session_prefix']);
        $sessionTrainingDir='formaciones/'.str_replace(' ', '-', $dirName);
        $namespaceResponse=array(
            'dir_name'=>$sessionTrainingDir,
            'prefix_file_name'=>'sesion_'.$prefixName
        );
        
        return $namespaceResponse;
    }

    public function sanitizeFolderName($String){

        $String = preg_replace("[äáàâãª]","a",$String);
        $String = preg_replace("[ÁÀÂÃÄ]","A",$String);
        $String = preg_replace("[ÍÌÎÏ]","I",$String);
        $String = preg_replace("[íìîï]","i",$String);
        $String = preg_replace("[éèêë]","e",$String);
        $String = preg_replace("[ÉÈÊË]","E",$String);
        $String = preg_replace("[óòôõöº]","o",$String);
        $String = preg_replace("[ÓÒÔÕÖ]","O",$String);
        $String = preg_replace("[úùûü]","u",$String);
        $String = preg_replace("[ÚÙÛÜ]","U",$String);
        $String = preg_replace("[^´`¨~]","",$String);
        $String = str_replace("ç","c",$String);
        $String = str_replace("Ç","C",$String);
        $String = str_replace("ñ","n",$String);
        $String = str_replace("Ñ","N",$String);
        $String = str_replace("Ý","Y",$String);
        $String = str_replace("ý","y",$String);
        $String= preg_replace("([^\w\s\d\-_~,;:\[\]\(\).])", '', $String);

        return $String;
    }

}
