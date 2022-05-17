<?php

namespace App\Core;

use App\Core\Request;


class Controller
{
    protected Request $request;
    //Injection de la request dans le controller
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function render(string $path, array $data = [])
    {
        $data["Constantes"] = Constantes::class;
        $data["request"] = $this->request;
        ob_start();

        extract($data);
        require_once(Constantes::ROOT() . "templates/" . $path . ".html.php");
        $content_for_views = ob_get_clean();
        require_once(Constantes::ROOT() . "templates/layout/base.layout.html.php");
    }
    public function redirectToRoute($uri)
    {
        header("location:" . Constantes::WEB_ROOT . $uri);
    }
}
