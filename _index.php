<?php

require_once ('vendor/autoload.php');

$errorObject = new App\Controllers\ErrorsController;

if (isset($_SERVER['PATH_INFO'])) {

   $path = explode('/', $_SERVER['PATH_INFO']);
   var_dump($path);

   $classFile = '';

   if (isset($path[1])) {
       $classFile = ucfirst($path[1]) . 'Controller';
   }
   if (file_exists('controllers/' . $classFile . '.php')) {
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
           } else {
            $errorObject->error();
//                include_once('controllers/ErrorController.php');
               // $errorObject = new \App\Controllers\ErrorController();
               // $errorObject->index();
           }
       } else {
           $object->index();
       }
   } else {
//        include_once('controllers/ErrorController.php');
       // $errorObject = new \App\Controllers\ErrorController();
       // $errorObject->index();
   }
} else {
    $errorObject->error();
//    include_once('controllers/HomeController.php');
   // $homeObject = new \App\Controllers\HomeController();
   // $homeObject->index();
}