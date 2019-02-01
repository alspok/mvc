<?php
namespace App\Controllers;
use App\Helpers;

$form = new FormHelper('POST', '');
$form->input(['name' => 'name', 'type' => 'text']);
echo '<br />';
$form->input(['name' => 'email', 'type' => 'text']);
echo $form->get();


//  echo 'Name: <br>';

// echo  'E.mail: ';

// echo 'Password: ';
// $form->input(['name' => 'pass', 'type' => 'password']);
// echo 'Confirm pass: ';
// $form->input(['name' => 'confpass', 'type' => 'password']);
// $form->input(['name' => 'submit', 'type' => 'submit']);
// $form->get();