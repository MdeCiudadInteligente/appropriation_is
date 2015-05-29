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


	public function add_service() {
		$this->request->onlyAllow('ajax');
		 // No direct access via browser URL - Note for Cake2.5: allowMethod()
			$usuario = $this->Session->read('Auth.User.id_user');
			$debug=array();
			$this->set('usuario',$usuario);

			try {
				$uploadHandler = new UploadHandlerController();	
			}catch(Exception $e) {
				$debug['error']=$e;
			}


			// $this->Upload->create();
			// $debug['request']=$this->request->data;
			// $data=$this->request->data;
			// $training_id=$this->request->query['training'];
			// $data['TraSession']['training_id']=$training_id;
			// $data['TraSession']['creation_date']=date('Y-m-d H:i:s');
			// $data['TraSession']['user_id']=$usuario;
			// $error=false;
			// try{
			// 	if (!$this->Upload->save($data)) {
			// 		throw new Exception();	
			// 	} else {
			// 		$lastid=$this->Upload->id;
			// 	}
			// } catch(Exception $e) {
			//     $error=$e;
			// }	

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
			$response['files']=$_FILES;
			$response['debug']=$debug;
			$this->set(compact('response')); // Pass $data to the view
			$this->set('_serialize', 'response'); // Let the JsonView class know what variable to use
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