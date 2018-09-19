<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 15.09.18
 * Time: 18:10
 */

namespace Service;

use App\config;
use Controller\DefaultController;
use Controller\ExceptionController;

class Routing
{
    private $url = [];

    public function __construct()
    {
        $this->url = parse_url($_SERVER['REQUEST_URI']);
    }

    public function start()
    {
        $routings = array_flip(getRoutMap());

        if (!isset($routings[$this->url['path']])) {
            new ExceptionController(['msg' => 'Обычная 404-я']);
        }

        $defaultController = new DefaultController($routings[$this->url['path']] . 'Action');
        $dd = 1;
    }
}