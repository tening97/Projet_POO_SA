<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Classe;

class ClasseController extends Controller
{

    public function ListerClasse()
    {
        $classe = Classe::findAll();
        $this->render(
            "classe/lister",
            [
                'titre' => ' La Listes des classes',
                'classes' => $classe
            ]
        );
    }

    public function CreerClasse()
    {
        if ($this->request->isGet()) {
            $this->render('classe/ajout');
        } else {
            extract($_POST);

            $classe = new Classe;


            $classe->setFiliere($filiere);
            $classe->setLibelle($libelle);
            $classe->setNiveau($niveau);
            $classe->insert();
            $this->redirectToRoute('classes');
        }
    }
}
