<?php




require_once __DIR__ .'/vendor/autoload.php';
use src\Form;


$form =  new Form();

$form->Start('#','get');
$form->type('text');
$form->type('email');
$form->submit('sub');

$form->end();