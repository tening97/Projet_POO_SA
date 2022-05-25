<?php

namespace App\Model;

use  App\Core\Model;

class Inscription extends Model
{
    //Attributs Instances
    //Attributs de classe
    //Attributs navigationnels = attributs issus des relations(association)
    private int $id;
    private int $ac_id;
    private int $classe_id;
    private int $etudiant_id;




    public function ac(): AC
    {
        $sql = "select p.* from" . parent::table() . "i,personne p where 
        p.id=i.ac_id and p.role like'ROLE_AC' and i.id=?";
        return parent::findBy($sql, [$this->id]);
    }
    public function __construct()
    {
    }

    //ManyToOne =>AnneeScolaire
    public function anneeScolaire(): AnneeScolaire
    {

        $sql = "select a.* from annee_scolaire a ," . parent::table() . ".i where 
        a.id=i.annee_id  and i.id=?";

        return parent::findBy($sql, [$this->id]);
    }
}


//INSERT INTO `inscription` (`id`, `ac_id`, `etudiant_id`, `annee_id`, `classe_id`) VALUES (NULL, '1', '12', NULL, '1');