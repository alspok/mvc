<?php
//path peeversti  i mazasias
// var_dump($_SERVER);
// $path = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);
// $path = explode('/',$_SERVER['REQUEST_URI']);
echo '<pre>';
if(!isset($_SERVER['PATH_INFO'])) $_SERVER['PATH_INFO'] = '/';

print_r($_SERVER['PATH_INFO']);
$path = explode('/',$_SERVER['PATH_INFO']);
print_r($path);

$errorClass = 'ErrorsController';
include_once('controllers/' . $errorClass . '.php');
$errorObject = new $errorClass;

$class='';
if(isset($path[1])){
$class = ucfirst($path[1] ) .'Controller'; //PostsController
}
echo $class . '<br>';

if(file_exists('controllers/'.$class.'.php')){
	include_once('controllers/'.$class .'.php');
	$object = new $class;
	
	if(!empty($path[2])){
		$method = $path[2];//padaryti i mazasias raides
		if(method_exists($object, $method)){
			if(!empty($path[3])){
				$object->$method($path[3]);
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

