<?php

namespace Frameworkphp3wa;


use Frameworkphp3wa\Router;
use Frameworkphp3wa\Database\ConnectMysql;
use Twig;

class Kernel{
    public function run(){
        $router = new Router();
        $dispatcher = $router->setRoutes();
        $router->getRouter($dispatcher);
    }

    public function getPDO(){
        return ConnectMysql::getPDO();
    }
}