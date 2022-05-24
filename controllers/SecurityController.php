<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Request;
use App\Model\User;
use App\Core\Session;


class SecurityController extends Controller
{

    public function authentification()
    {
        //Affichage formulaire de connexion = Requete Get   
        if ($this->request->isGet()) {
            $this->render('security/login');
        } else {
            extract($_POST);

            $userConnect = User::findUserByLoginAndPassword($login, $pwd);
            if ($userConnect == null) {

                $this->redirectToRoute("");
            } else {


                $_SESSION['userConnect'] = $userConnect;
                $role = $_SESSION['userConnect']->role;

                if ($role == 'ROLE_AC') {
                    $this->redirectToRoute("ac");
                } elseif ($role == 'ROLE_RP') {
                    $this->redirectToRoute("rp");
                } elseif ($role == 'ROLE_ETUDIANT') {
                    $this->redirectToRoute("etudiant");
                }
            }
        }
        //Traitement apres soumission = Requete Post
    }
    public function deconnexion()
    {
        unset($_SESSION['userConnect']);
        session_destroy();
        $this->redirectToRoute("login");
    }

    public function accueil()
    {
        $this->render('personne/accueil');;
    }
}
