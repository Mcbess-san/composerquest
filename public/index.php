<?php

use App\Wcs\Hello;

require '../vendor/autoload.php';

$hello = new Hello();
echo $hello->talk();
