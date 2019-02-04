<?php

namespace App\Controllers;

class ErrorsController
{
    public $errorMessage = '';

    public function error($errorMessage)
    {
        $this->erorMessage = $errorMessage;
        echo $errorMessage;
    }
}