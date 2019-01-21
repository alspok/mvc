<?php

class FormHelper
{
    private $form = '';

    public function __construct($method, $action)
    {
        $this->form .= '<form method="' . $method .'" action="' . $action . '">';
    }

    public function input($attributes)
    {
        $this->form .= '<input ';
            foreach($attributes as $key => $attr){
                $this->form .= $key . '="' . $attr . '" ';
            }
        $this->form .= '>';
        var_dump($this->form);

        return $this;
    }

    public function selection($attributes)
    {

        $this->form .= '<select ';
        foreach ($attributes as $key => $attr) {
            $this->form .= $key . '="' . $attr . '" ';
        }
        $this->form .= '</select>';
        var_dump($this->form);
    }

    public function get()
    {
        $this->form .= '</form>';
        return $this->form;
    }
}