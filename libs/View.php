<?php

class View
{
    private$viewCatalogPath = 'C:/wamp/www/alspok/oop/mvc/views/';


    public function render($templatePath)
    {
        require_once($this->viewCatalogPath . 'header.html');
        require($this->viewCatalogPath . $templatePath . '.php');
        require_once($this->viewCatalogPath . 'footer.html');
    }
}