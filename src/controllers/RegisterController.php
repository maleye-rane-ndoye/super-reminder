<?php

namespace App\Controllers;

use App\Models\UserModel;


class  RegisterController{

    private UserModel $userModel;

    
    public function __construct(){
        $this->userModel = new UserModel();
    
    }
    
    public function registerUser($firstname,$lastname,$login,$password){
           $success = $this->userModel->register($firstname,$lastname,$login,$password);

           $response = ['sucess' => $success];
           echo json_encode($response);
    }

    public function showRegister($user = "maleye"){
        require __DIR__ . '/../views/register.php';
    }






}