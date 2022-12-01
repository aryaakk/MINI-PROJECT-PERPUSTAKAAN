<?php

namespace Staditek\TH\App\Middleware;
use Staditek\TH\App\Core\Router;

class Auth
{
    function before(): void
    {
        if ($_SESSION['auth'] == null) {
            header("location: ".Router::url('/login'));
        }
    }
}
