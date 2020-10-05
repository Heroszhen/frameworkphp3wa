<?php

namespace App\Controller;

use Frameworkphp3wa\AbstractController;
use Frameworkphp3wa\FlashBag;

class HomeController extends AbstractController{

    public function index(){
        $flash = new FlashBag();
        $flash->empty();
        $flash->set("exemple flashbag message","info");
        return $this->render("home.index.twig",[
            "flash" => $flash->get()
        ]);
    }
    public function index2($id){
        var_dump($id);
    }
}
