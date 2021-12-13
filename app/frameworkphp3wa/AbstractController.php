<?php

namespace Frameworkphp3wa;

use App\Entity\Article;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController{
    private $templateEngine;

    public function __construct() {
        $loader = new FilesystemLoader(dirname(__DIR__, 2) . '/templates');
        $twig = new Environment($loader, [
            'cache' => false,
        ]);
        $twig->addGlobal('session', $_SESSION);
        $this->templateEngine = $twig;
    }

    public function render($file,$arguments=[]){
        echo $this->templateEngine->render($file, $arguments);
    }

    public function Toredirect($url){
        header("Location: /".$url);
    }
}