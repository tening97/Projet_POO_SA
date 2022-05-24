<?php

namespace App\Controller;

use App\Model\Personne;
use App\Core\Controller;

class PersonneController extends Controller
{

    public function lister()
    {
        $personnes = Personne::findAll();
        $this->render(
            'personne/'.__FUNCTION__,
            ["personnes" => $personnes]
        );
    }
}
