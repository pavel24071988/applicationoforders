<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 15.09.18
 * Time: 17:19
 */

use Service\Routing;

/** @var \Composer\Autoload\ClassLoader $loader */
$рр = __DIR__ . '/vendor/autoload.php';
$loader = require __DIR__ . '/vendor/autoload.php';

/*$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);*/

$ff = 1;
try {
    $routing = new Routing;
} catch (Exception $exception) {
    $ff = 1;
}
$dd = $routing->getUrl();
echo 'Hello';