<?php

use Toutou\http\http\RequestFactory;
use Toutou\http\App;

require __DIR__.'/../vendor/autoload.php';

$request = RequestFactory::createFromGlobals();

var_dump($request->getUri());
var_dump($request->getHeaders());

$app = new App();

echo $app->getService('uri-display')->sayHello();