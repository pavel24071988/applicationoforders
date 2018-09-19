<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 15.09.18
 * Time: 17:19
 */

use Service\Routing;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__ . '/../vendor/autoload.php';

$routing = new Routing;
$routing->start();
