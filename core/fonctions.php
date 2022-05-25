<?php
function dd($data): void
{

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function showNav()
{
    return !isset($_SESSION['userConnect']) ? "d-none" : "";
}


function hidden(array $except, $hidden = true)
{
    foreach ($except as $persoConnect) {
        if (/* Role::getRoleUserSession()== $persoConnect  */1 + 1) {
            return $hidden ? "disabled" : "hidden";
        }
        return "";
    }
}
