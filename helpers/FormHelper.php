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
        // var_dump($this->form);

        return $this;
    }
    
//Selecton TAG
    public function selection($attributes)
    {

        $this->form .= '<select ';
        foreach($attributes as $key => $attr) {
            $this->form .= $key . '="' . $attr . '">';
        }
        $this->form .= '>';
        return $this;
    }
    
    public function selectionOption($attributes){
        foreach($attributes as $key => $attr){
            $this->form .= '<option value="' . $key . '">' . $attr .'</option>';
        }
        $this->form .= '</select>';
        // var_dump($this->form);
        return $this;
    }
//End selection TAG

//Textarea TAG
    public function textArea($attributes)
    {
        $this->form  .= '<textarea ';
        $i = 0;
        foreach($attributes as $key => $attr){
            $this->form .= $key . '="' . $attr . '" ';
            if($i++ === 3){
                $this->form  .= '>' . $attr . '</textarea>';
           }
            // var_dump($this->form);
        }
        return $this;
    }

    public function get()
    {
        $this->form .= '</form>';
        return $this->form;
    }
}