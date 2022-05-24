<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Etudiant;

class EtudiantController extends Controller
{

    public function listerEtu()

    {
        $etudiants = Etudiant::findAll('role', 'ROLE_ETUDIANT');
        $data = [
            'titre' => "Liste des etudiants",
            'etudiants' => $etudiants
        ];
        $this->render('personne/etudiant/listeEtu', $data);
    }
    public function ajoutEtudiant()
    {
        if ($this->request->isGet()) {
            $this->render("personne/etudiant/" . __FUNCTION__);
        } else {
            extract($_POST);
            $etudiant =  new Etudiant();
            $etudiant->setNomComplet($nom);
            $etudiant->setMatricule($matricule);
            $etudiant->setAdresse($adresse);
            $etudiant->setLogin($login);
            $etudiant->setPassword($pwd);
            $etudiant->setSexe($sexe);
            $etudiant->insert();
            $this->redirectToRoute("accueil");
        }
    }
}
