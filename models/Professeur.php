<?php

namespace App\Model;



class Professeur extends Personne
{
    private string $grade;
    //fonctions navigationnelles
    //ManyToMany avec classe
    public function __construct()
    {
        parent::$role = "ROLE_PROFESSEUR";
    }

    public function classes(): array
    {
        return [];
    }


    public function update($id): int
    {
        $db = self::database();
        $db->connexionBD();
        //Requete non preparée:la variable est injectée lors de l'ecriture de la requete
        $sql = "UPDATE personne  SET `nom_complet` = ? ,`grade` = ? WHERE `personne`.`id` = " . $id;
        $ressult = $db->executeUpdate($sql, [$this->nomComplet, $this->grade]);
        $db->closeConnection();
        return $ressult;
    }

    public function insert(): int
    {
        $db = parent::database();
        $db->connexionBD();
        //Requete non preparée:la variable est injectée lors de l'ecriture de la requete
        $sql = "INSERT INTO `personne` (`nom_complet`, `role`,   `grade`) VALUES (?, ?,?)";

        $ressult = $db->executeUpdate($sql, [$this->nomComplet, parent::$role, $this->grade]);
        $db->closeConnection();
        return $ressult;
    }

    /**
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}
