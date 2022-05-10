<?php
class Classe extends Model
{
    //fonctions navigationnelles
    //ManyToMany avec classe

    public function __construct()
    {
        self::$table = 'classe';
    }
    public function professeurs(): array
    {
        return [];
    }
}
