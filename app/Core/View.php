<?php
namespace staditek\OOP\App\Core;

class View
{
    public static function ViewUser(string $view, $data = "")
    {
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
        require_once __DIR__ . '/../View/template_user/' . $view . '.php';
    }

    public static function ViewLogin(string $view, $data = "")
    {
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
        require_once __DIR__ . '/../View/template_login/' . $view . '.php';
    }
}
