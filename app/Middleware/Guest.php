<?php

namespace Staditek\TH\App\Middleware;
use Staditek\TH\App\Core\Router;

class Guest
{
    function before(): void
    {
        if (@$_SESSION['auth']) {
            header("location: ".Router::url('/dashboard'));
        }
    }
}
