<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\AC;

class ACController extends Controller
{

    public function listerAC()
    {
        $ac = AC::findAll('role', 'ROLE_AC');
        $data = [
            'titre' => "Liste des AC",
            'ac' => $ac
        ];
        $this->render("personne/ac/lister", $data);
    }
    public function ajoutAC()

    {

        if ($this->request->isGet()) {
            $this->render("personne/ac/addAc");
        } else {
            extract($_POST);
            $ac = new AC();
            $ac->setNomComplet($nom);
            $ac->setLogin($login);
            $ac->setPassword($pwd);
            $ac->insert();
            $this->redirectToRoute("");
        }
    }
}
