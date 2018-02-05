<?php
/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/


require_once 'page/actions.php';

$pageAction = new Actions(isset($_GET['action']) ? $_GET['action'] : $_GET['action']='view-records');


