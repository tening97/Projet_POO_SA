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
        dd(get_class_vars(self::table()));
    }

    public function classes(): array
    {
        return [];
    }
    //insert
    //update
    //delete
    //selectALl() //select * from table
    //selectById() //select * from table where id=1;

    public static function findAll(): array
    {

        $sql = "select id as id_prof,`nom_complet`, `role`, `grade` from ? where role like 'ROLE_PROFESSEUR'";
        return parent::findBy($sql, [parent::table()]);
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
