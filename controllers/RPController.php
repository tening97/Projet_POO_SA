<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\RP;

class RPController extends Controller
{

    public function listerRP()

    {
        $rps = RP::findAll('role', 'ROLE_RP');
        $data = [
            'titre' => "Liste des RP",
            'rps' => $rps
        ];
        $this->render('personne/rp/listeRP', $data);
    }
    public function ajoutRP()
    {
        if ($this->request->isGet()) {
            $this->render('personne/rp/' . __FUNCTION__);
        } else {
            extract($_POST);
            $rp = new RP();
            $rp->setNomComplet($nom);
            $rp->setLogin($login);
            $rp->setPassword($pwd);
            $rp->insert();
            $this->redirectToRoute("rp");
        }
    }
}
