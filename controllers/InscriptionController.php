<?php

namespace App\Controller;

use App\Model\Classe;
use App\Core\Controller;

class InscriptionController extends Controller
{

    public function inscrire()


    {
        $classe = Classe::findAll();
        if ($this->request->isGet()) {
            $this->render("inscription/inscrire", [
                'classes' => $classe,
                'titre' => 'Inscription Etudiant'
            ]);
        }
    }
}
