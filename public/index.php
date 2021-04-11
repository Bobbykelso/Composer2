<?php

require __DIR__ . '/../vendor/autoload.php';
use \App\Wcs\Hello;

$hello = new \App\Wcs\Hello;
echo $hello->talk();