<?php 

namespace Toutou\http\service;

class HelloWorldService

{
    private $name;

    public function __construct(NamerInterface $namer)
    {
        $this->name = $namer->getName();
    }

    public function sayHello()
    {
        echo "Hello " . $this->name;
    }
}