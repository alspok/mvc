<?php

// namespace App\Controllers;
namespace App\Helpers;

use App\Controllers;
use App\Helpers;

class LogInspect
{
    public $logData = [];

    public function __construct($logData)
    {
        $this->logData = $logData;
        var_dump($this->logData);
    }

    
}