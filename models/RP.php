<?php

namespace App\Model;

class RP extends User
{
    public function __construct()
    {
        self::$role = "ROLE_RP";
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
