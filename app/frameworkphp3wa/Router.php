<?php

namespace Frameworkphp3wa;

use App\Controller\HomeController;
use App\Controller\SecurityController;
use FastRoute;

class Router{
    public function setRoutes() 
    {
        $routes = include dirname(__DIR__).'/routes.php';
        return FastRoute\simpleDispatcher($routes);
    }

    public function getRouter($dispatcher){
        //chemin relatif
        $uri = $_SERVER['REQUEST_URI'];
        //strpos : Cherche la position de la première occurrence dans une chaîne
        if (false !== $pos = strpos($uri, '?')) {
            //substr: Retourne un segment de chaîne
            $uri = substr($uri, 0, $pos);
        }
        //rawurldecode : Décode une chaîne URL
        $routeInfo = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], rawurldecode($uri));
        if($routeInfo[0] == FastRoute\Dispatcher::NOT_FOUND || $routeInfo[0] == FastRoute\Dispatcher::METHOD_NOT_ALLOWED){
            header('HTTP/1.0 404 Not Found');
            $security = new SecurityController();
            $response = $security->index();
            //echo $twig->render($response[0], ["parameters"=>$response[1]]); 
        }elseif($routeInfo[0] == FastRoute\Dispatcher::FOUND) { 
            foreach ($routeInfo[2] as $key => $value) {
               array_push($routeInfo[1][2],$value);
            }
            call_user_func_array(array($routeInfo[1][0], $routeInfo[1][1]),$routeInfo[1][2]);
        }
    }
}