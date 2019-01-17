<?php

class View
{
    private$viewCatalogPath = 'C:/wamp/www/alspok/oop/mvc/views/';

    public function render($templatePath)
    {
        require ($this->viewCatalogPath . $templatePath . '.php');
    }
}