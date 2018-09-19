<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 19.09.18
 * Time: 10:15
 */

namespace Controller;


class ExceptionController
{
    public function __construct($params)
    {
        $this->showException($params['msg']);
        die;
    }

    private function showException($text)
    {
        echo $text;
    }
}