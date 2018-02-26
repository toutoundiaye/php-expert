<?php

namespace Toutou\http\service;


class NameService implements NamerInterface
{
    private $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}