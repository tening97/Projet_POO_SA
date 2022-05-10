<?php
class RP extends User
{
    public function __construct()
    {
        self::$role = "ROLE_RP";
    }

    public static function findAll(): array
    {
        $sql = "select *from ".parent::table()." where role like   '".self::$role."'";
        echo $sql;
        return [];
    }
}
