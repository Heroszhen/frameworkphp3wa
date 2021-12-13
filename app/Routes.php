<?php
use FastRoute\RouteCollector;


return function(RouteCollector $r) {
    $r->addRoute('GET', '/{id:\d+}',array(new App\Controller\ExempleHomeController(), "index",[]));
    
};