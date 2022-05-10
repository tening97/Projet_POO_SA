<?php
class Model implements IModel
{
    public static function table(): string
    {
        $table = get_called_class();
        $table = ($table == "User" or $table == "RP" or $table == "AC" or $table == "Etudiant" ) ? "personne" : strtolower($table);
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
        $sql = "delete from '" . self::table() . "' where id=$id";
        echo $sql;
        return 0;
    }

    public static function findAll(): array
    {
        $sql = "select * from " . self::table() . "";
        echo $sql;
        return [];
    }
    public static function findById(int $id): object|null
    {
        $sql = "select * from '" . self::table() . "' where id=$id";
        echo $sql;
        return null;
    }
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array
    {
        return null;
    }
}
