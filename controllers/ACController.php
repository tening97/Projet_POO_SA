<?php

namespace App\Core;

use App\Core\Controller;

class ACController extends Controller
{

    public function listerAC()

    {
        $this->render("personne/ac/liste.html.php");
    }
}
