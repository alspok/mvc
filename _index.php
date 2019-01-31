<?php
require_once ('vendor/autoload.php');

$errorClass = 'App\Controllers\ErrorsController';
$errorObject = new $errorClass;

if(isset($_SERVER['PATH_INFO'])){
    $path = explode('/', $_SERVER['PATH_INFO']);    
}

$class='';
if(isset($path[1])){
    $class = ucfirst($path[1] ) .'Controller'; //PostsController
}

if(file_exists('controllers/' . $class . '.php')){
    include_once('controllers/' . $class .'.php');
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