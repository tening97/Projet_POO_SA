<?php
namespace App\Core;
interface IModel
{
    //Abstraites
    //instances

    public function update(): int;
    public function insert(): int; //Quoi

    
    //static
    public static function delete(int $id): int;
    public static function findAll(): array;
    public static function findById(int $id): object|null;
    public static function findBy(string $sql, array $data = null, $single = false): object|null|array;
    //Methodes static =>Classe
    /* 
                Classe::methode 
                Classe::delete(1)
                Classe::insert([1,"Classe 1"])//insert into classe (libelle) values(Classe 1)
                Classe::findAll()//select *from classe

                */
    //Methodes Instances=>Methodes Objet
    //etat de Objet=>valeurs de ses attributs
    /* 

            $obj = new Classe
            $obj->setId(1)
            $obj->setLibelle("Classe 1") 
            $obj->update()//update from classe set libelle='classe 1' where id= 1 
                
         $obj = new Classe
         $obj->setId(1)
         $obj->delete()//Delete from classe where id=1

           
            

 */
}
