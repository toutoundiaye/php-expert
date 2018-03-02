<?php

require __DIR__.'./../vendor/autoload.php';

use Toutou\doc\PetShop;

$pet = new PetShop();
$parameters = $pet->getConfig();
var_dump($parameters);
