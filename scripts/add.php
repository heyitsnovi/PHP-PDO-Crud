<?php

/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/

session_start();

require_once '../classes/PDO_connection.php';
require_once '../classes/gump.php';
require_once '../classes/app.php';

$gump = new GUMP();
$app = new App();
$pdo_obj = new PDO_connection();

$validation = $gump->is_valid($_POST,
	array(
		'firstname'=>'required|min_len,2|max_len,35',
		'lastname'=>'required|min_len,2|max_len,35'
		)
	);



if(is_array($validation)){

	$app->set_form_error($validation);
	header('location:../index.php?action=add-record');
}else{

	$stmt = $pdo_obj->dbObject->prepare("INSERT INTO names (id, firstname, lastname, date_added) VALUES (NULL, :fname, :lname, :today);");
	$stmt->execute(array(':fname'=>$_POST['firstname'],':lname'=>$_POST['lastname'],':today'=>date('Y-m-d h:i:s')));

	if($stmt->rowCount()==1){

		header('location:../index.php');
	}

}