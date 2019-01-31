<?php

namespace App\Controllers;

use App\Libs;


// include_once('View.php');

class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    
}
