<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;



class SecurityController extends Controller
{

    public function authentification()
    {

        //Affichage formulaire de connexion = Requete Get   
        if ($this->request->isGet()) {
            $this->render('security/login.html.php');
        };
        //Traitement apres soumission = Requete Post
    }
    public function deconnexion()
    {
        $this->redirectToRoute("login");
    }
}
