<?php

namespace App\Core;

use App\Core\Session;


class Role
{
    private Session $session;
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public static function isConnect()
    {
    }
    public static function isAC()
    {
    }
    public static function isRP()
    {
    }
    public static function isEtudiant()
    {
    }
}
