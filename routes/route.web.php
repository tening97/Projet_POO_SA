<?php

use App\Core\Router;
use App\Controller\ACController;
use App\Controller\RPController;
use App\Controller\ClasseController;
use App\Controller\EtudiantController;
use App\Controller\PersonneController;
use App\Controller\SecurityController;
use App\Controller\ProfesseurController;
use App\Controller\InscriptionController;
use App\Exception\RouteNotFoundException;




$router = new Router();

//Definir les routes =>Ajout des routes dans le tableau
//Chemin relatif SecurityController =>use App\Controller\SecurityController
//Chemin absolu App\Controller\SecurityController ou SecurityController::class

$router->route('/login', [SecurityController::class, "authentification"]);
$router->route('/', [SecurityController::class, "authentification"]);

//$router->route('login', [SecurityController::class, "autentification"]);
$router->route('/logout', [SecurityController::class, "deconnexion"]);

$router->route('/classes', [ClasseController::class, "listerClasse"]);
$router->route('/ajoutClasse', [ClasseController::class, "creerClasse"]);

$router->route('/ajoutP', [ProfesseurController::class, "ajouterProf"]);
$router->route('/professeur', [ProfesseurController::class, "listerProf"]);
$router->route('/editProf', [ProfesseurController::class, "editProf"]);
$router->route('/deleteProf', [ProfesseurController::class, "deleteProf"]);
$router->route('/detail', [ProfesseurController::class, "detail"]);


$router->route('/inscrire', [InscriptionController::class, "inscrire"]);



$router->route('/personne', [PersonneController::class, "lister"]);

$router->route('/ac', [ACController::class, "listerAC"]);
$router->route('/addAc', [ACController::class, "ajoutAC"]);

$router->route('/etudiant', [EtudiantController::class, "listerEtu"]);
$router->route('/ajoutEtudiant', [EtudiantController::class, "ajoutEtudiant"]);

$router->route('/rp', [RPController::class, "listerRP"]);
$router->route('/ajoutRP', [RPController::class, "ajoutRP"]);

$router->route('/accueil', [SecurityController::class, "accueil"]);










//Resolution des routes = rechercher si la route se trouve dans le tablreau
try {
    $router->resolve();
    //essaye de resoudre la route
} catch (RouteNotFoundException $ex) {

    //capture l'exception et affiche le;
    echo $ex->message;
}
