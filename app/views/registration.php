<?php
namespace App\Controllers;
use App\Helpers;

$form = new FormHelper('POST', '');
$form->input(['name' => 'name', 'type' => 'text', 'placeholder' => 'Name']);
$form->input(['name' => 'email', 'type' => 'text', 'placeholder' => 'E.mail']);
$form->input(['name' => 'pass', 'type' => 'password', 'placeholder' => 'Password']);
$form->input(['name' => 'confpass', 'type' => 'password', 'placeholder' => 'Conf. password']);
$form->input(['name' => 'submit', 'type' => 'submit', 'placeholder' => 'Submit']);
echo $form->get();