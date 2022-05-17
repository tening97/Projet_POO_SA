<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller
{

    public function AffecterClasse()
    {
    }

    public function ListerProf()
    {
        $profs = Professeur::findAll();
        $data = [
            'titre' => "Liste des professeurs",
            'profs' => $profs
        ];

        $this->render('professeur/listeProf', $data);
    }
}
