<?php

namespace App\Model;

use PDO;

class Conexao{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=127.0.0.1;dbname=pdo','root','');
        }
            return self::$instance;
        
    }
}

?>