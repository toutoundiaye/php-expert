<?php
use Toutou\http\RequestFactory2;
require __DIR__.'/../vendor/autoload.php';

$request = RequestFactory2::createFromGlobals();

var_dump($request->getUri());
var_dump($request->getHeaders());