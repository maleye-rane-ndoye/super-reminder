<?php

use App\Controllers\HomeController;

use App\Controllers\LoginController;
use App\Controllers\RegisterController;


//  home routes
$router->map( 'GET', '/', function() {
    $homeController = new HomeController();
    $homeController->showHome();
 }, 'home' );
 



//  register routes

$router->map( 'GET', '/register', function() {
    $registerController = new RegisterController();
    $registerController->showRegister();
}, 'register-page' );

$router->map( 'POST', '/register', function() {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $login = $_POST['login'];
    $password = $_POST['password'];



    $registerController = new RegisterController();
    $registerController->registerUser($firstname, $lastname, $login, $password);
}, 'register-user' );







//  login routes
 $router->map( 'GET', '/login', function() {
   $loginController = new LoginController;
   $loginController->showloginpage();
 }, 'login' );
 