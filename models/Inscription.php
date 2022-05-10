<?php
class Inscription extends Model
{
    //Attributs Instances
    //Attributs de classe
    //Attributs navigationnels = attributs issus des relations(association)
    private int $id;

    public function ac(): AC
    {
        $sql = "select * from inscription i,personne p where 
        p.id=i.ac_id and p.role like'ROLE_AC' and i.id=" . $this->id;
        return new AC();
    }
    public function __construct()
    {
    }

    //ManyToOne =>AnneeScolaire
    public function anneeScolaire(): AnneeScolaire
    {

        $sql = "select a.* from inscription i,annee_scolaire a where 
        a.id=i.annee_id  and i.id=" . $this->id;

        return new AnneeScolaire();
    }
}
