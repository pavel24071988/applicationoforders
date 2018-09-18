<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 15.09.18
 * Time: 18:10
 */

namespace Service;
use Controller\DefaultController;

class Routing
{
    public function __construct()
    {
        $gg = 1;
        $ff = parse_url($_SERVER['REMOTE_ADDR']);
    }

    public function getUrl()
    {
        $ff = 1;
    }
}