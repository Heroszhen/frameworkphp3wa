<?php

namespace App\Controller;

use Frameworkphp3wa\AbstractController;

class SecurityController extends AbstractController{

    /**
     * route not found
     */
    public function index(){
        return $this->render("security.index.twig",[]);
    }
}