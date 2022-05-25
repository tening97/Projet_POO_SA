<?php

namespace App\Model;

use  App\Core\Model;

class Classe extends Model
{
    private string $libelle;
    private string $filiere;
    private string $niveau;


    public function __construct()
    {
    }
    public function professeurs(): array
    {
        return [];
    }

    /**
     * Get the value of filiere
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }


    public function insert(): int
    {
        $db = parent::database();
        $db->connexionBD();
        //Requete non preparée:la variable est injectée lors de l'ecriture de la requete
        $sql = "INSERT INTO " . self::table() . "(`libelle`, `niveau`,   `filiere`) VALUES (?,?,?)";
        $ressult = $db->executeUpdate($sql, [$this->libelle,  $this->niveau, $this->filiere]);
        $db->closeConnection();

        return $ressult;
    }
    /**
     * Get the value of niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
}
