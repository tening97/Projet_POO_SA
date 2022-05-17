<?php

namespace App\Model;

use  App\Core\Model;

class Classe extends Model
{
    //fonctions navigationnelles
    //ManyToMany avec classe

    public function __construct()
    {
    }
    public function professeurs(): array
    {
        return [];
    }
}
