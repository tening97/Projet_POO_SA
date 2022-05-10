<?php
class AC extends User
{
    //Attributs navigationnels = attributs issus des relations(association)

    // OneToMany avec inscription
    //1ere approche
    private array $inscription;

    //2e approche
    //Fonction navigationnel = fonctions issues des associations
    public function inscription(): array
    {
        return [];
    }
    //fonction navigationnel
    public function __construct()
    {
        parent::$role = "ROLE_AC";
        $this->inscription = [];
    }

    //Redefinition des fonctions IModel

    public static function findAll(): array
    {
        $sql = "select *from ".parent::table()." where role like ROLE_AC";
        echo $sql;
        return [];
    }
}
