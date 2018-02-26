<?php

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\FingersCrossedHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\MemoryUsageProcessor;

require __DIR__.'/vendor/autoload.php';

error_log('bonjour, ça va?');

echo 'avec echo';

$myLogger = new Logger('my-channel');

$stream = new StreamHandler('php://stderr', Logger::WARNING);

$stream->pushProcessor(function($record){
    var_dump($record);
    $record['extra']['project'] = '03log';
    $record['extra']['ip'] = $_SERVER['REMOTE_ADDR'];
    return $record;
});
$stream->pushProcessor(new GitProcessor());
$stream->pushProcessor(new MemoryUsageProcessor());
$stream->setFormatter(new LineFormatter('-->%datetime% <-- Non mais tu te rends compte: %message% %context% %extra%' . "\n"));
$myLogger->pushHandler($stream);

$myLogger->pushHandler(new StreamHandler(__DIR__.'/test.log', Logger::WARNING));

$logFile = new StreamHandler(__DIR__.'/test.log', Logger::DEBUG);
$fingersCrossed = new FingersCrossedHandler($logFile, Logger::EMERGENCY);
$myLogger->pushHandler($fingersCrossed);

$myLogger->error('une erreur', ['status' => 'demo training']);
$myLogger->debug('juste pour voir');
$myLogger->notice('prend bien note');
$myLogger->alert('la grosse alerte');