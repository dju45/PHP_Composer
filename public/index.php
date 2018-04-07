<?php
require_once __DIR__ . '/../vendor/autoload.php';


use \App\Wcs\Hello;
use \HelloWorld\SayHello;

$morning = new SayHello();
$morning->world();
v

$afternon = new Hello();
$afternon->talk();