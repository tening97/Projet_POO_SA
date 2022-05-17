<?php

use App\Core\Router;
use App\Core\ACController;
use App\Controller\ClasseController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Exception\RouteNotFoundException;




$router = new Router();

//Definir les routes =>Ajout des routes dans le tableau
//Chemin relatif SecurityController =>use App\Controller\SecurityController
//Chemin absolu App\Controller\SecurityController ou SecurityController::class

$router->route('/login', [SecurityController::class, "authentification"]);
//$router->route('login', [SecurityController::class, "autentification"]);
$router->route('/logout', [SecurityController::class, "deconnexion"]);
$router->route('/classes', [ClasseController::class, "listerClasse"]);
$router->route('/add-classe', [ClasseController::class, "creerClasse"]);
$router->route('/personne', [PersonneController::class, "lister"]);
$router->route('/ac', [ACController::class, "listerAC"]);




//Resolution des routes = rechercher si la route se trouve dans le tablreau
try {
    $router->resolve();
    //essaye de resoudre la route
} catch (RouteNotFoundException $ex) {

    //capture l'exception et affiche le;
    echo $ex->message;
}
