<?php

namespace App;

require_once ('vendor/autoload.php');
use App\Controllers;
// $testClass = 'App\Controllers\TestController';
// $test = new $testClass;

$errorClass = 'App\Controllers\ErrorsController';
$errorObject = new $errorClass;

if(isset($_SERVER['PATH_INFO'])) $path = explode('/', $_SERVER['PATH_INFO']);

if(isset($path[1])){
$class = ucfirst($path[1] ) . 'Controller'; //PostsController
}

$controller = 'App\Controllers\\' . $class . '.php';
var_dump($controller);
// if(file_exists('./app/controllers/' . $class . '.php')){
if(file_exists($controller)){
	var_dump($class);
	$object = new $class;

	if(!empty($path[2])){
		$method = $path[2];//padaryti i mazasias raides

		if(method_exists($object, $method)){
			if(!empty($path[3])){
				$method = $path[3];
				$object->$method($path[3]);
			}
			else{
				$object->$method();
			}
		}
		else{
			$errorObject->error();
		}
	}
	else{
		$object->index();
	}
	
}
else{
	$errorObject->error();
}

