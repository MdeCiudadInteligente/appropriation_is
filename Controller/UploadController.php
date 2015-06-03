<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'UploadHandler');

/**
 * Uploads Controller
 *
 * @property Upload $Upload
 * @property PaginatorComponent $Paginator
 */


class UploadController extends AppController {


	private $AllowedRegistryScope=array('session_id');

	public function add_service_view(){
		
	}

	public function checkValidScope($scopeIndex){
		return in_array($scopeIndex,$this->AllowedRegistryScope);
	}

    public function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0 ||
            !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
                strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
        return
            ($https ? 'https://' : 'http://').
            (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
            ($https && $_SERVER['SERVER_PORT'] === 443 ||
            $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }


    public function get_server_var($id) {
        return @$_SERVER[$id];
    }

	public function add_service() {
		$this->request->onlyAllow('ajax');
		 // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$usuario = $this->Session->read('Auth.User.id_user');
			$this->set('usuario',$usuario);
			$fileSaveScope=$this->request->query['file_scope'];
			$debug=array();
			$debug['file_scope']=$fileSaveScope;
			$options=array(
	            'script_url' => $this->get_full_url().'/'.basename($this->get_server_var('SCRIPT_NAME')),
	            'upload_dir' => dirname($this->get_server_var('SCRIPT_FILENAME')).'/files/',
	            'upload_url' => $this->get_full_url().'/files/',
	            'print_response' => true,
	            'var_response'=>true
			);
			try {
				//Handle upload 
				$uploadHandler = new UploadHandlerController($options);
				//Get response via variable -- true -- json_decode
				$uploadResponse=$uploadHandler->get_var_response(true);
			}catch(Exception $e) {
				$debug['error_file']=$e;
			}
			//Uploaded files
			$Files=$uploadResponse->files;
			//recibe all file upload response and process the database actions
			foreach ($Files as $index => $file) {
				$file=(array)$file;
				$savedFile=$this->registerFile($file,$fileSaveScope);
				$fileSaveResponse[]=$savedFile;
			}

			$debug['saveResponse']=$fileSaveResponse;



			// //Response actions 
			// $success_actions=array(
			// 	'closeAside'=>array(
			// 		array(
			// 			'element'=>'#right-content-aside',
			// 			'wipe'=>true,
			// 			'time'=>2000
			// 		)
			// 	),
			// 	'reloadGrid'=>array('gridTrainingSessions')
			// );

			// $actions=array();
			// if(!$error){
			// 	$message=__('La sesión fue guardada correctamente.');
			// 	$actions=$success_actions;
			// }else{
			// 	$message=__('La sesión no pudo ser eliminada.Por favor intente de nuevo mas tarde.');
			// }
			// $notify=array(
			// 	'notify'=>array(
			// 			'type'=>'flash',
			// 			'message'=>mb_convert_encoding($message, "UTF-8", "Windows-1252"),
			// 			'autoclose'=>2000
			// 	)
			// );
			// $actions=array_merge($notify,$actions);
			// $response['sendData']=$data;
			// $response['error']=$error;
			// $response['debug']=array('data'=>$debug);
			// $response['actions']=$actions;
			$response['debug']=$debug;
			$this->set(compact('response')); // Pass $data to the view
			$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}


	public function setFiledata($uploadResponse,$registryScope){
		$usuario = $this->Session->read('Auth.User.id_user');
		$response['AllowedScopeSwitch']=true;
		$response['failed_scopes']=array();
		$response['registryScope']=$registryScope;
		$data['Upload']=array(
			'name' =>$uploadResponse['name'],
			'size' =>$uploadResponse['size'],
			'ext'  =>$uploadResponse['type'],
			'url'  =>$uploadResponse['url'],
			'user_id' =>$usuario,
			'creation_date'=>date('Y-m-d H:i:s')
		);
		foreach ($registryScope as $key => $value) {
			if (!$this->checkValidScope($key)){
				$response['failed_scopes'][]=$key;
				$response['AllowedScopeSwitch']=false;
			}else{
				$data['Upload'][$key]=$value;
			}
		}
		$response['data']=($response['AllowedScopeSwitch'])?$data:false;
		return $response;
	}


	public function registerFile($fileData,$registryScope=array()){
		    $id=$this->Upload->getLastInsertID();
			$FileResponse=$this->setFiledata($fileData,$registryScope);
			$data=$FileResponse['data'];
			if($id){
				$data['Upload']['id']=$id+1;
			}
			$response['commit']=true;
			$response['savedData']=$data;
			if($data){
				$response['data']=$data;
				$response['registryScope']=$FileResponse['registryScope'];
				try{
					if (!$this->Upload->save($data)) {
						throw new Exception();	
					} else {
						// $response['data']['lastID']=$this->Upload->id;
					}
				}catch(Exception $e) {
				    $response['commit']=false;
				    $response['error']=$e;
				}	
			}else{
			    $response['commit']=false;
			    $response['error']['message']='The registry scope is out of bounds ('.implode('|',$FileResponse['failed_scopes'].')');
			    $response['error']['failed']=$FileResponse['failed_scopes'];
			}
			return $response;
	}

	public function delete($id = null) {
		$this->Upload->id = $id;
		if (!$this->Upload->exists()) {
			throw new NotFoundException(__('Invalid upload'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Upload->delete()) {
			$this->Session->setFlash(__('The upload has been deleted.'));
		} else {
			$this->Session->setFlash(__('The upload could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
		}
	}
