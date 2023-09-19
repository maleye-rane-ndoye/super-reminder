<?php

namespace App\Models;

use PDOException;
use PDO;

 abstract class Database{

        protected $pdo;
      
        protected function setBdd(){
            try {
                $this->pdo = new PDO('mysql:host=localhost;dbname=todolist', 'root', '');
            } catch (PDOException $e) {

                echo 'connection to fail: ',  $e->getMessage();
            }
        }
      
      
 }
