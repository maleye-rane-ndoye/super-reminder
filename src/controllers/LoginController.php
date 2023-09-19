<?php

namespace App\Controllers;


class LoginController {

    public function showLoginPage() {
        
        require __DIR__ . '/../views/login.php';
    }
}