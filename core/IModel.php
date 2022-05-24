<?php

namespace App\Core;

interface IModel
{
        //Abstraites
        //instances

        public function update($id): int;
        public function insert(): int; //Quoi


        //static
        public static function delete(int $id): int;
        public static function findAll(string $role = "", string $req = ""): array;
        public static function findById(int $id): object|null|array;
        public static function findBy(string $sql, array $data = null, $single = false): object|null|array;
}
