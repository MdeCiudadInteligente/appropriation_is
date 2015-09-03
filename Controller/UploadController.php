<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'UploadRouteHandler');
App::import('Controller','UploadHandler');

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


	public function isAuthorized($user) {
		// Any registered user can access public functions

		if ((isset($user['permission_level']) && $user['permission_level'] == '1')||(isset($user['permission_level']) && $user['permission_level'] == '2')||(isset($user['permission_level']) && $user['permission_level'] == '3')) {
			return true;
		}
		// Default deny
		//return false;
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
			$model=$this->request->query['model'];
			$debug=array();
			$dirScopeData=array();
			$errorControl=false;
			$debug['error']=false;

			foreach ($fileSaveScope as $key => $value) {
				$dirScopeData['key']=$key;
				$dirScopeData['value']=$value;
				break;
			}

			try {
				$uploadHandlerRoute = new UploadRouteHandlerController();
				$createdDir=$uploadHandlerRoute->createDir($model,$dirScopeData);
				if(!is_array($createdDir)){
					throw new Exception("Could not create directory, please try again later");
				}else{
					$dir=$createdDir['dir_name'];
					$imagePrefix=$createdDir['prefix_file_name'];
				}
			}catch(Exception $e) {
				$debug['error']['error_file_dir']=$e;
				$errorControl=true;
			}			
			
			$debug['file_scope']=$fileSaveScope;
			$debug['RouteHandlerDir']=$createdDir;

			if(!$errorControl){

				$options=array(
		            'script_url' => $this->get_full_url().'/'.basename($this->get_server_var('SCRIPT_NAME')),
		            'upload_dir' => dirname($this->get_server_var('SCRIPT_FILENAME')).'/files/'.$dir.'/',
		            'upload_url' => $this->get_full_url().'/files/'.$dir.'/',
		            'print_response' => true,
		            'var_response'=>true,
		            'image_name_identifier'=>$imagePrefix,
		            'limit_name'   => 100,
		            'disable_name'=>true
				);

				try {
					//Handle upload 
					$uploadHandler = new UploadHandlerController($options);
					//Get response via variable -- true -- json_decode
					$uploadResponse=$uploadHandler->get_var_response(true);
				}catch(Exception $e) {
					$debug['error']['error_file']=$e;
					$errorControl=true;
				}
				if(!$errorControl){
					//Uploaded files
					try{
						$Files=$uploadResponse->files;
						//recibe all file upload response and process the database actions
						foreach ($Files as $index => $file) {
							$file=(array)$file;
							$savedFile=$this->registerFile($file,$fileSaveScope);
							$fileSaveResponse[]=$savedFile;
						}
					}catch (Exception $e){
						$debug['error']['error_register_file']=$e;
						$errorControl=true;
					}
				}
			}

			$debug['saveResponse']=$fileSaveResponse;
			$fileuploads=count($fileSaveResponse);
			//Response actions 
			$success_actions=array(
				// 'closeAside'=>array(
				// 	array(
				// 		'element'=>'#right-content-aside',
				// 		'wipe'=>true,
				// 		'time'=>2000
				// 	)
				// ),
				'reloadGrid'=>array('gridUploads')
			);

			$actions=array();
			if(!$errorControl){
				$message=__('Se cargaron correctamente  '.$fileuploads.' archivos al sistema');
				$actions=$success_actions;
			}else{
				$message=__('No fue posible cargar los archivos seleccionados, por favor comuniquese con el administrador del sistema');
			}
			$notify=array(
				'notify'=>array(
						'type'=>'flash',
						'message'=>mb_convert_encoding($message, "UTF-8", "Windows-1252"),
						'autoclose'=>2000
				)
			);
			$actions=array_merge($notify,$actions);
			$response['error']=$debug['error'];
			$response['actions']=$actions;
			$response['debug']=array('data'=>$debug);
			$this->set(compact('response')); // Pass $data to the view
			$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
	}



	public function index_service()
	{
		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
		$id_usuario = $this->Session->read('Auth.User.id_user');
		$this->set('id_usuario',$id_usuario);
		$db = $this->Upload->getDataSource();
		$dataScope=$this->request->query['dataScope'];
		$errorCheck=true;
		try{
			$condition='AND ';
			foreach ($dataScope as $key => $value) {
				if(!in_array($key, $this->AllowedRegistryScope)){
					throw new Exception("Requested data scope its not allowed".$key);
				}else{
					$condition.=$key.'='.$value.' AND';
				}
			}
			$condition=substr($condition, 0,-3);
		}catch (Exception $e){
			$error=$e;				
		}

		$query="SELECT upload.*, users.username
				FROM upload , users
				WHERE upload.user_id=users.id_user
			   ".$condition;


		$uploads=$db->fetchAll($query,
			    $dataScope
		);

		$count=0;
		foreach ($uploads as $key => $trainer) {
		
			$data['rows'][$count]=array(
					'id'=>$trainer['upload']['id'],
					'name'=>$trainer['upload']['name'],
					'size'=>$trainer['upload']['size'],
					'ext'=>$trainer['upload']['ext'],
					'tags'=>$trainer['upload']['tags'],
					'meta'=>$trainer['upload']['meta'],
					'url'=>$trainer['upload']['url'],
					'user_id'=>$trainer['upload']['user_id'],
					'username'=>$trainer['users']['username'],
					'creation_date'=>$trainer['upload']['creation_date'],
					'modification_date'=>$trainer['upload']['modification_date']
			);
			$count++;
		}	

		if(!isset($data)){
			$data=array('rows'=>array());
		}
		$this->set(compact('data')); // Pass $data to the view
		$this->set('_serialize', 'data'); // Let the JsonView class know what variable to use
			
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

	public function delete_service() {

		$this->request->onlyAllow('ajax'); // No direct access via browser URL - Note for Cake2.5: allowMethod()
    	$id_usuario = $this->Session->read('Auth.User.id_user');
    	$data=$this->request->data;
    	$id_upload=(isset($data['id']))?$data['id']:NULL;
		$error=false;
		$this->Upload->id = $id_upload;
		$debug=array();
		if (!$this->Upload->exists()) {
			throw new NotFoundException(__('Invalid upload'));
		}
		try{
			$options = array('conditions' => array('Upload.' . $this->Upload->primaryKey => $id_upload));
			$upload=$this->Upload->find('first', $options);
			$debug['upload']=$upload;
			$fileUrl=$upload['Upload']['url'];
			$fileUrlParsed=parse_url($fileUrl);
			$debug['uploadParsed']=$fileUrlParsed;
			if(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/'){
				$filePath=$_SERVER['DOCUMENT_ROOT'].substr($fileUrlParsed['path'],1);
			}else{
				$filePath=$_SERVER['DOCUMENT_ROOT'].'/'.substr($fileUrlParsed['path'],1);
			}
			$debug['filePath']=$filePath;
			$debug['SERVER']=$_SERVER;
			$removeFile=$this->remove_file($filePath);
			$debug['Remove']=$removeFile;
			if(!$removeFile){
					throw new Exception('The current file dont exist');
			}else{
				if (!$this->Upload->delete()) {
					throw new Exception('The current registry could not be deleted');
				}
			}
		}catch(Exception $e){
			$error=$e;
		}

		$success_actions=array(
			'reloadGrid'=>array('gridUploads')
		);

		$actions=array();
		if(!$error){
			$message=__('El archivo ha sido correctamente eliminado.');
			$actions=$success_actions;
			$close=2000;
		}else{
			$message=__('No ha sido posible eliminar el archivo. Por favor comuniquese con el administrador e intente de nuevo mas tarde.');
			$close=false;
		}
		$notify=array(
			'notify'=>array(
					'type'=>'flash',
					'message'=>mb_convert_encoding($message, "UTF-8", "Windows-1252"),
					'autoclose'=>$close
			)
		);
		$actions=array_merge($notify,$actions);
		$response['sendData']=$data;
		$response['error']=$error;
		$response['actions']=$actions;
		$response['debug']=$debug;
		$this->set(compact('response')); // Pass $data to the view
		$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use

	}

	public function remove_file($fileRoute){
		if(file_exists($fileRoute)){
		    unlink($fileRoute);
		}else{
		    return false;
		}
		return true;
	}

}

