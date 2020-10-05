<?php

namespace Frameworkphp3wa;

use App\Entity\Article;
use Twig;

abstract class AbstractController{
    protected $twig;

    public function __construct() {
        $loader = new Twig\Loader\FilesystemLoader(Dirname(Dirname(__DIR__)).'/templates'); 
        $twig = new Twig\Environment($loader, [
            'cache' => false,
        ]);
        $twig->addGlobal('session', $_SESSION);
        $this->twig = $twig;
    }

    public function render($file,$arguments){
        echo $this->twig->render($file, $arguments); 
    }

    public function Toredirect($url){
        header("Location: /".$url);
    }
}