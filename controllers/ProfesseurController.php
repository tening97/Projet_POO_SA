<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Professeur;

class ProfesseurController extends Controller
{

    public function editProf($id)
    {


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

    public function deleteProf($id)
    {

        Professeur::delete($id);
        $this->redirectToRoute('professeur');
    }

    public function ListerProf()
    {
        if ($this->request->isGet()) {

            $profs = Professeur::findAll('role', 'ROLE_PROFESSEUR');
            $data = [
                'titre' => "Liste des professeurs",
                'profs' => $profs
            ];

            $this->render('professeur/listeProf', $data);
        }
    }
    public function ajouterProf()
    {
        if ($this->request->isGet()) {
            $this->render('professeur/addProf');
        } else {
            extract($_POST);
            $prof = new Professeur();
            $prof->setNomComplet($nom);
            $prof->setGrade($grade);
            $prof->insert();
            $_POST = [];
            $this->redirectToRoute('professeur');
        }
    }

    public function detail($id)

    {


        $prof = Professeur::findById($id);


        $this->render('professeur/detail', [
            'detail' => $prof
        ]);
    }
}
