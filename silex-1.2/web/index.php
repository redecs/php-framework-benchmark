<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();

$app->get('/hello/index', function() {
    return 'Hello World!';
});

//$app->run();
$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->sendHeaders();
$response->sendContent();

echo "\n" . (memory_get_peak_usage(true)/1024/1024);

