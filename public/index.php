<?php

require '../vendor/autoload.php';


use App\Wcs\Hello;
use HelloWorld\SayHello;

$message = new SayHello();
echo $message->world();

$hello = new Hello();
echo $hello->talk();
