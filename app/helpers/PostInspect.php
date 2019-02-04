<?php

// namespace App\Controllers;
namespace App;

use App\Controllers;
use App\Helpers;

$submitData = $_POST;
$inspect = new PostInspect;
if(sizeof($submitData) === 3){
    $inspect->logInspect();
}
else{
    $inspect->regInspect();
}

class PostInspect
{

    public function logInspect()
    {
        echo 'in loginspect';
        $logData = $_POST;
        var_dump($logData);
    }

    public function regInspect()
    {
        echo 'in reginspect';
        $regData = $_POST;
        var_dump($regData);
    }
}