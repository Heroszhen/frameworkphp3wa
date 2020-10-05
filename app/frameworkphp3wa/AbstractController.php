<?php

namespace Frameworkphp3wa;

use App\Entity\Article;
use Twig;
use Frameworkphp3wa\FlashBag;

abstract class AbstractController{
    protected $twig;
    private $flashbag;

    public function __construct() {
        $loader = new Twig\Loader\FilesystemLoader(Dirname(Dirname(__DIR__)).'/templates'); 
        $twig = new Twig\Environment($loader, [
            'cache' => false,
        ]);
        $twig->addGlobal('session', $_SESSION);
        $this->twig = $twig;

        $this->flashbag = new FlashBag();
    }

    public function render($file,$arguments){
        echo $this->twig->render($file, $arguments); 
    }

    public function Toredirect($url){
        header("Location: /".$url);
    }
}