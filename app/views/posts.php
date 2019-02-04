<?php
namespace App\Controllers;

use App\Helpers;

$form = new FormHelper('POST', '');
echo 'Name: ';
$form->input(['name' => 'name', 'type' => 'text']);
// echo $form->get();

echo 'E.mail: ';
$form->input(['name' => 'email', 'type' => 'text']);
// echo $form->get();

echo 'Password: ';
$form->input(['name' => 'pass', 'type' => 'password']);
// echo $form->get();

echo 'Confirm password: ';
$form->input(['name' => 'confpass', 'type' => 'password']);
// echo $form->get();

$form->input(['name' => 'submit', 'type' => 'submit']);
echo $form->get();
