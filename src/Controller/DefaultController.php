<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 15.09.18
 * Time: 17:45
 */

namespace Controller;


class DefaultController
{
    public function __construct($method)
    {
        $this->{$method}();
    }

    private function indexAction()
    {
        echo 'Индекс';
    }
}