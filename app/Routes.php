<?php
use FastRoute\RouteCollector;


return function(RouteCollector $r) {
    $r->addRoute('GET', '/',array(new App\Controller\ExempleHomeController(), "index",[]));
    
};