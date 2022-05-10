<?php
//Classe concrete = classe qui produit des objets,ne contient que des methodes concretes
//Methodes concrete =  methode qu'on connait sa definition
//Methode abstraite = methode qu'on ne connait pas sa definition
//Classe abstraite =  classe qui ne produit pas     des objets
//Classe finale =  classe qui ne peut pas avoir de classe fille(Relation de specialisation)
abstract class Personne extends Model
{
    //Attributs Instance
    protected int $id;
    protected string $nomComplet;
    protected string  $role;
    //Attributs de classe ou static se sont des attributs partagés à l'ensemble des classes
    private static int $nbrPersonne;
    //Constructeur par defaut 
   
    //Getters et setters
    //Getters Methode public qui permettent d'obtenir
    // la valeur d'un attribut privé ou 
    //protected au niveau de l'interface de l'objet
    //Setters Methode qui permet de modifier 
    //la valeur d'un attribut privé ou protected
    // au niveau de l'interface de l'objet
    //-> = Operateur de porté d'instance 
    //Getters
    public function getId(): int
    {
        return $this->id;
    }
    public function getNomComplet(): string
    {
        return $this->nomComplet;
    }
    //Setters
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;
        return $this;
    }
    //self =  operateur de portée de classe 
    public static function getNbrePersonne(): int
    {
        return self::$nbrPersonne;
    }

    public static function setNbrePersonne(int $nbrPersonne): void
    {
        self::$nbrPersonne = $nbrPersonne;
    }
    
}
