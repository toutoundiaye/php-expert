<?php


//change current directory to document root (public)
//chdir('public');


function file_hidden($path) {
    //return mb_ereg('(^|/)\.', $path);
    return preg_match('!(^|/)\.!', $path);
}

$resourceNotFound = file_hidden($_SERVER['REQUEST_URI']);

if ($resourceNotFound) {
    http_response_code(404);
    require __DIR__.'/error/404.html';
    die;
}

/* Plus simplement
if(preg_match('/[^.]+\.[^.]+$/', $_SERVER['REQUEST_URI'])) {
    http_response_code(404);
    require __DIR__.'/error/404.html';
    die;
}
*/

if(file_exists($_SERVER['DOCUMENT_ROOT']. $_SERVER['REQUEST_URI'])) {
//ne fait rien
//execute la ressource demandée
    return false;
}

require $_SERVER['DOCUMENT_ROOT'] . '/index.php';