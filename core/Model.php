<?php

namespace App\Core;

abstract class Model implements IModel
{
    protected static Database|null $database = null;
    protected static function database(): Database
    {
        return self::$database = new Database();
    }
    public static function table(): string
    {
        $table = get_called_class();
        $table = str_replace("App\\Model\\", "", $table);
        $table = ($table == "User" or $table == "RP" or $table == "AC" or $table == "Etudiant" or $table == "Professeur") ? "personne" : strtolower($table);
        return $table;
    }
    //Redefinition des fonctions IModel
    public function insert(): int
    {
        return 0;
    }
    public function update(): int
    {
        return 0;
    }
    public static function delete(int $id): int
    {
        $db = self::database();
        $db->connexionBD();
        //Requete non preparée:la variable est injectée lors de l'ecriture de la requete
        $sql = "delete from '" . self::table() . "' where id=$id";

        $ressult = $db->executeUpdate($sql);
        $db->closeConnection();
        return $ressult;
    }

    public static function findAll(): array
    {
       
        $db = self::database();
        $db->connexionBD();
        $sql = "select * from " . self::table() . "";
        $ressult = $db->executeSelect($sql);
        $db->closeConnection();
        return $ressult;
    }
    public static function findById(int $id): object|null
    {
        $db = self::database();
        $db->connexionBD();
        //Requete  preparée:la variable est injectée lors de l'execution de la requete
        //?=jocker
        $sql = "select * from '" . self::table() . "' where id=?";
        $ressult = $db->executeSelect($sql, [$id]);
        $db->closeConnection();
        return $ressult;
    }
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array
    {
        $db = self::database();
        $db->connexionBD();
        $ressult = $db->executeSelect($sql,$data,$single);
        $db->closeConnection();
        return $ressult;
    }
}
