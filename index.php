<?php

require_once ('vendor/autoload.php');

$errorObject = new App\Controllers\ErrorsController;

if (isset($_SERVER['PATH_INFO'])) {

   $path = explode('/', $_SERVER['PATH_INFO']);

   $classFile = '';

   if (isset($path[1])) {
       $classFile = ucfirst($path[1]) . 'Controller';
   }
   $pathToClassFile = 'app/controllers/' . $classFile . '.php';
   if (file_exists('app/controllers/' . $classFile . '.php')) {
       $class = 'App\Controllers\\' . $classFile;
       $object = new $class;
       if (!empty($path[2])) {
           $method = $path[2]; //TODO padaryti i mazasias
           if (method_exists($object, $method)) {
               if (isset($path[3])) {
                   $id = $path[3];
                   $object->$method($id);
               } else {
                   $object->$method();
               }
           } else $errorObject->error();
       } else$object->index();
   } else $errorObject->error();
} else $errorObject->error();
