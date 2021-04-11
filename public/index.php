<?php

require __DIR__ . '/../vendor/autoload.php';
use \App\Wcs\Hello;
use \HelloWorld\SayHello;

$hello = new \App\Wcs\Hello;
echo $hello->talk();

$helloWorld = new SayHello();
echo $helloWorld->world();