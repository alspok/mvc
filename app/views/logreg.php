<?php
namespace App\Helpers;
use App\Controllers;
?>

<h3>Login</h3>
<?php
// $form = new FormHelper('POST', '/alspok/mvc/app/helpers/postinspect.php');
$form = new FormHelper('POST', 'log');
$form->input(['name' => 'logemail', 'type' => 'text', 'placeholder' => 'E.mail']);
$form->input(['name' => 'logpass', 'type' => 'password', 'placeholder' => 'Password']);
$form->input(['name' => 'logconfpass', 'type' => 'password', 'placeholder' => 'Conf. password']);
$form->input(['name' => 'logsubmit', 'type' => 'submit', 'placeholder' => 'Login']);
echo $form->get();
?>

<h3>Registration</h3>
<?php
$form = new FormHelper('POST', 'reg');
$form->input(['name' => 'regname', 'type' => 'text', 'placeholder' => 'Name']);
$form->input(['name' => 'regemail', 'type' => 'text', 'placeholder' => 'E.mail']);
$form->input(['name' => 'regpass', 'type' => 'password', 'placeholder' => 'Password']);
$form->input(['name' => 'regconfpass', 'type' => 'password', 'placeholder' => 'Conf. password']);
$form->input(['name' => 'regsubmit', 'type' => 'submit', 'placeholder' => 'Register']);
echo $form->get();
?>
