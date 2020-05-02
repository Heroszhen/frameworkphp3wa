<?php

use App\Controller\SecurityController;
use FastRoute\RouteCollector;


return function(RouteCollector $r) {
    $r->addRoute('GET', '/',array(new App\Controller\HomeController($_GET["twig"]), "index",[]));
    
};