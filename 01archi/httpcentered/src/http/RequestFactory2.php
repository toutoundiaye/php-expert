<?php

namespace Toutou\http\http;

    use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
    use Symfony\Component\HttpFoundation\Request;
    use Psr\Http\Message\RequestInterface;

    class RequestFactory2
    {
        public function createFromGlobals(): RequestInterface
        {
            return (new DiactorosFactory())->createRequest(Request::createFromGlobals());
        }
    }
