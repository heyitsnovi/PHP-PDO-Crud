<?php

/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/

class App {


	public function set_form_error($errors){

		if(is_array($errors)){

			$_SESSION['form_errors'] = $errors;
		}		
		
	}

	public function get_form_errors(){

		$form_errors = '';
		
		if(isset($_SESSION['form_errors'])){

			$form_errors = $_SESSION['form_errors'];
			unset($_SESSION['form_errors']);
			return $form_errors;

		}else{
			return array();
		}

	}

}