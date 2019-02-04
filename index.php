<?php

require_once ('vendor/autoload.php');

$errorObject = new App\Controllers\ErrorsController;

if (isset($_SERVER['PATH_INFO'])) {

   $path = explode('/', $_SERVER['PATH_INFO']);

   $classFile = '';

   if (isset($path[1])) {
       $classFile = ucfirst($path[1]) . 'Controller';
   }
   if (file_exists('App\Controllers\\' . $classFile . '.php')) {
       $class = 'App\Controllers\\' . $classFile;
       $object = new $class;
       if (!empty($path[2])) {
           $method = $path[2];
           if (method_exists($object, $method)) {
               if (isset($path[3])) {
                   $id = $path[3];
                   $object->$method($id);
               }
               else {
                   $object->$method();
               }
           }
           else $errorObject->error('Error. Method not found.');
       }
       else$object->index();
   }
   else $errorObject->error('Error. Class file not found.');
}
else $errorObject->error('Error. PAPT_INFO not found.');
