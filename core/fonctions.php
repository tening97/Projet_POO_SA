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
