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
        header('Content-type:application/json;charset=utf-8');
        http_response_code(200);
        echo json_encode([$id,1]);
    }
}
