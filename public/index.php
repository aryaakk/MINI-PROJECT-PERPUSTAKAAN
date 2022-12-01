<?php
session_start();

use Staditek\TH\App\Controller\ControllerLogin;
use Staditek\TH\App\Controller\ControllLibrarian;
use Staditek\TH\App\Controller\ControllMember;
use Staditek\TH\App\Controller\ControllPerpus;
use Staditek\TH\App\Core\Router;
use Staditek\TH\App\Middleware\Auth;
use Staditek\TH\App\Middleware\Guest;

require_once __DIR__ .'/../vendor/autoload.php';
//BOOK AND DASHBOARD
Router::addRoute('GET', '/dashboard', ControllPerpus::class, 'TampilDash', [Auth::class]);
Router::addRoute('GET', '/ShowBuku', ControllPerpus::class, 'TampilBuku', [Auth::class]);
Router::addRoute('GET', '/AddBuku', ControllPerpus::class, 'AddBuku', [Auth::class]);
Router::addRoute('POST', '/saveBook', ControllPerpus::class, 'SaveeBook', [Auth::class]);
Router::addRoute('GET', '/ShowEditBook/:id', ControllPerpus::class, 'EditBook', [Auth::class]);
Router::addRoute('POST', '/updateBook', ControllPerpus::class, 'UpdateBook', [Auth::class]);
Router::addRoute('GET', '/deleteBook/:id', ControllPerpus::class, 'deleteBook', [Auth::class]);

//MEMBER
Router::addRoute('GET', '/ShowMember', ControllMember::class, 'ShowMember', [Auth::class]);
Router::addRoute('GET', '/AddMember', ControllMember::class, 'AddMember', [Auth::class]);
Router::addRoute('POST', '/saveMember', ControllMember::class, 'SaveeMember', [Auth::class]);
Router::addRoute('GET', '/deleteMember/:id', ControllMember::class, 'deleteMember', [Auth::class]);

//LIBRARIANS
Router::addRoute('GET', '/ShowLibrarian', ControllLibrarian::class, 'ShowLibrarian', [Auth::class]);
Router::addRoute('GET', '/AddLibrarian', ControllLibrarian::class, 'AddLibrarian', [Auth::class]);
Router::addRoute('POST', '/saveLibrarian', ControllLibrarian::class, 'SaveeLibrarian', [Auth::class]);
Router::addRoute('GET', '/ShowEditLibrarian/:id', ControllLibrarian::class, 'EditLibrarian', [Auth::class]);
Router::addRoute('POST', '/updateLibrarian', ControllLibrarian::class, 'UpdateLibrarian', [Auth::class]);
Router::addRoute('GET', '/deleteLibrarian/:id', ControllLibrarian::class, 'deleteLibrarian', [Auth::class]);

//SUBCRIPTION


//LOGIN
Router::addRoute('GET', '/Logout', ControllerLogin::class, 'logout', []);
Router::addRoute('GET', '/login', ControllerLogin::class, 'login', [Guest::class]);
Router::addRoute('POST', '/LoginPost', ControllerLogin::class, 'LoginPost', [Guest::class]);


Router::run();
