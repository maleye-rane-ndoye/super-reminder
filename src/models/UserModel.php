<?php

namespace App\Models;

class UserModel extends Database {

    public function __construct(){
        $this->setBdd();
    }
    
    public function register($firstname,$lastname,$login,$password){

    $request = $this->pdo->prepare("INSERT INTO user(login, firstname, lastname, password) values(:login, :firstname, :lastname, :password)");
    $request->execute([
        ':login' => $login, 
        ':firstname' => $firstname, 
        ':lastname' => $lastname, 
        ':password' => $password, 
        
    ]);
    if($request->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}

}