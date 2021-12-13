<?php
namespace Frameworkphp3wa;

use Frameworkphp3wa\Kernel;

abstract class AbstractRepository{
    protected $pdo;

    public function __construct() {
        $this->pdo = (new Kernel)->getPDO();
    }

    function execRequete($req,$params = array()){

		// Sanitize
		if ( !empty($params)){
			foreach($params as $key => $value){
				$params[$key] = trim(strip_tags($value));
			}
		}
		//global $pdo; // globalisation de $pdo

		$r = $this->pdo->prepare($req);
		$r->execute($params);
		if( !empty($r->errorInfo()[2]) ){
			die('Erreur rencontrée lors de la requête : '.$r->errorInfo()[2]);
		}

		return $r;
	}

}