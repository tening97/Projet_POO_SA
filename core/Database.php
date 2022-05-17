<?php

namespace App\Core;

use PDO;

// \= namespace racine
class Database
{
    private \PDO|null $pdo;
    public function connexionBD(): void
    {
        $this->pdo = new \PDO("mysql:dbname=poo_odc;host=localhost:8000", "root", "");
    }

    public function closeConnection()

    {
        $this->pdo = null;
    }
    public function executeSelect(string $sql, array $data = [], bool  $single = false): object|array|null
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        if ($single) {

            $result = $query->fetch(\PDO::FETCH_OBJ);
            if ($query->rowCount() == 0) return null;
        } else {
            //single = false
            $result = $query->fetchAll(\PDO::FETCH_OBJ);
        }
        return $result;
    }
    public function executeUpdate(string $sql, array $data = [], $single = false): int
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($data);
        //inserer =>retourner l'id generer
        $result = $query->rowCount();
        return $result;
    }
}
