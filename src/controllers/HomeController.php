<?php

namespace App\Controllers;

class HomeController {


public function showHome($user = "Maleye"){

    require __DIR__ . '/../views/homePage.php';
    
}



}