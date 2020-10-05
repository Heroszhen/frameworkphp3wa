<?php

use App\Controller\SecurityController;
use FastRoute\RouteCollector;


return function(RouteCollector $r) {
    $r->addRoute('GET', '/',array(new App\Controller\HomeController(), "index",[]));
    $r->addRoute('GET', '/index2/{id:\d+}',array(new App\Controller\HomeController(), "index2",[]));
};

//$r->addRoute('POST', '/admin/reservation/modifierreservation/{id:.+}',array(new AdminreservationController($_GET["twig"]), "editOneBooking",[$_SERVER['REQUEST_URI'],$_POST]));