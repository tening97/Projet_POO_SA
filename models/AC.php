<?php

namespace App\Model;

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

        $db = parent::database();
        $db->connexionBD();
        $sql = "select id as id_ac,`nom_complet`, `role`, `login`, `password` from " . parent::table() . " where role like 'ROLE_AC'";
        $ressults = $db->executeSelect($sql);
        $db->closeConnection();
        return $ressults;
    }
    public function insert(): int
    {
        $db = parent::database();
        $db->connexionBD();
        //Requete non preparée:la variable est injectée lors de l'ecriture de la requete
        $sql = "INSERT INTO `personne` (`nom_complet`, `role`,   `login`,`password`) VALUES (?, ?,?,?)";

        $ressult = $db->executeUpdate($sql, [$this->nomComplet, parent::$role, $this->login, $this->password]);
        $db->closeConnection();
        return $ressult;
    }
}
