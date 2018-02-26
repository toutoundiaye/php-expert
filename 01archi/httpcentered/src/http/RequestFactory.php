<?php

namespace Toutou\http\http;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;

class RequestFactory
{

    public static function createFromGlobals(): RequestInterface
    {
        return new Request(
            $_SERVER['REQUEST_METHOD'],
            $_SERVER['REQUEST_URI'],
            getallheaders(),
            file_get_contents('php://input')
        );
    
    }
}