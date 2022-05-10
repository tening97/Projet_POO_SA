<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//1-Inclure le fichier de la classen faisant de l'autoloading
//composer,e
require_once("../core/IModel.php");
require_once("../core/Model.php");
require_once("../models/Personne.php");
require_once("../models/User.php");
require_once("../models/RP.php");
require_once("../models/AC.php");
require_once("../models/Professeur.php");
require_once("../models/Classe.php");


/* require_once("../models/User.php");
require_once("../models/AC.php");
require_once("../models/Inscription.php");


 */


//2-Creer l'objet ou Instanciation
/* $pers1 = new Personne(); //appel methode de la classe nommée le constructeur
//3- Donner un etat à un objet

$pers1->setId(1);
$pers1->setNomComplet('Tening Ngom');


$pers2->setId(2);
$pers2->setNomComplet('Assane Ngom');


echo $pers1->getId();
echo $pers2->getId(); */


//Appel  Methode static

/* $pers2 = new User();
$pers2->setId(2)
    ->setNomComplet('Assane Ngom');



Personne::setNbrePersonne(12);
echo Personne::getNbrePersonne(); */
Personne::findAll();
User::findAll();
AC::findAll();
AC::delete(1);
Professeur::delete(1);
Classe::delete(1);
Classe::findAll();
/* User::findAll(); //select * from personne where role not like ROLE_PROFESSEUR
$ac =  new AC();
AC::findAll(); //Tous les ac select * from personne where role  like ROLE_AC
Professeur::findAll(); //select * from personne where role like ROLE_PROFESSEUR

$ins =  new Inscription();
$ins->ac();
$ins->anneeScolaire(); */
