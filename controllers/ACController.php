<?php

namespace App\Controller;

use App\Core\Controller;

class ACController extends Controller
{

    public function listerAC()
    {
        $this->render("personne/ac/lister.html.php");
    }
}
