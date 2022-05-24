<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller
{

    public function editProf()
    {
        $uri = $this->request->getUri();
        $id = $uri[count($uri) - 1];
        if ($this->request->isGet()) {

            $prof = Professeur::findById($id);

            $data = [

                'prof' => $prof
            ];

            $this->render('professeur/edit', $data);
        } else {
            extract($_POST);
            $prof =  new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->update($id);
            $this->redirectToRoute('professeur');
        }
    }

    public function deleteProf()
    {

        $uri = $this->request->getUri();
        $id = $uri[count($uri) - 1];
        Professeur::delete($id);
        $this->redirectToRoute('professeur');
    }

    public function ListerProf()
    {
        $profs = Professeur::findAll('role', 'ROLE_PROFESSEUR');
        $data = [
            'titre' => "Liste des professeurs",
            'profs' => $profs
        ];

        $this->render('professeur/listeProf', $data);
    }


    public function ajouterProf()
    {

        if ($this->request->isGet()) {
            $this->render('professeur/addProf');
        } else {
            extract($_POST);
            $prof =  new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->insert();
            $this->redirectToRoute("professeur");
        }
    }
}
