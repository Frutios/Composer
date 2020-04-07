<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;

$helloWorld = new Hello();

echo $helloWorld->talk();
