<?php
/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/


session_start();

require_once 'classes/PDO_connection.php';
require_once 'classes/app.php';

class Actions{

	private $pdo_obj;
	private $app;
	
	public function __construct($action){

		$this->pdo_obj = new PDO_connection();
		$this->app = new App();
		$this->doAction($action);

	}

	private function doAction($action){

		switch ($action) {

			case 'add-record':
				$errors = $this->app->get_form_errors();
				require_once 'layouts/add-record.php';
			break;


			case 'view-records':
				$data = $this->pdo_obj->dbObject->query("SELECT * from names");
				require_once 'layouts/view-records.php';
			break;


			case 'edit':
				$errors = $this->app->get_form_errors();
				$user_id = $_GET['name_id']=='' || !isset($_GET['name_id']) || $_GET['name_id'] <=0 ? header('location:./index.php') : $_GET['name_id'] ;
				$stmt = $this->pdo_obj->dbObject->prepare("SELECT * from names where id=:name_id");
				$stmt->execute(array('name_id'=>$user_id));
				$userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
				require_once 'layouts/edit-record.php';
			break;


			case 'delete':
				$user_id = $_GET['name_id']=='' || !isset($_GET['name_id']) || $_GET['name_id'] <=0 ? header('location:./index.php') : $_GET['name_id'] ;
				$stmt = $this->pdo_obj->dbObject->prepare("DELETE from names where id=:name_id");
				$stmt->execute(array('name_id'=>$user_id));
				header('location:./index.php?action=view-records');
			break;
			

			
			default:
				require_once 'layouts/mainpage.php';
			break;
		}

	}
}