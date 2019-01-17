<?php
//path peeversti  i mazasias
// var_dump($_SERVER);
// $path = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['REQUEST_URI']);
// $path = explode('/',$_SERVER['REQUEST_URI']);
// if(isset($_SERVER['']))
$path = explode('/',$_SERVER['PATH_INFO']);
echo '<pre>';
print_r($path);

$classFile='';
//$path[1] - Controllers
//$path[2] - metodas
if(isset($path[1])){
$classFile = ucfirst($path[1]).'Controller'; //PostsController
}
echo $classFile;
if(file_exists('controllers/'.$classFile.'.php')){
	include_once('controllers/'.$classFile.'.php');
	$object = new $classFile;
	
	if(!empty($path[2])){
		$method = $path[2];//padaryti i mazasias raides
		if(method_exists($object, $method)){
			if(!empty($path[3])){
				$object->$method($path[3]);
			}
		}
		else{
			echo '404';
		}
	}
	else{
		$object->index();
	}
	
}
else{
	
	echo '404 error not found ';
}

