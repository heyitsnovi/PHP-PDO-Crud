<?php
/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/


class PDO_connection {


		private $host ="localhost";
		private $db_name="mytuts";
		private $user="root";
		private $pass="";
		public $dbObject =NULL;

		public function __construct(){

			$this->dbObject = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name,$this->user,$this->pass);
		}


}