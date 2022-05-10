<?php
class Professeur extends Personne
{
    //fonctions navigationnelles
    //ManyToMany avec classe
    public function __construct()
    {
        self::$role= "ROLE_PROFESSEUR";
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
        $sql = "select *from ".parent::table()." where role like   '".self::$role."'";
        echo $sql;
        return [];
    }
}
