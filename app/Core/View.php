<?php

namespace Staditek\TH\App\Core;

class View
{
    public static function ViewPerpuss(string $view, $data = [])
    {
        require_once __DIR__ . '/../View/content-perpus/' . $view . '.php';
    }

    public static function ViewLogin(string $view, $data = "")
    {
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
    }
}
