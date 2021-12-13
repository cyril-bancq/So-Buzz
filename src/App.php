<?php 

namespace App;

use PDO;

class App {

    public static $pdo;

    public static $auth;

    public static function getPDO(): PDO
    {
        if (!self::$pdo) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=sobuzzquizz', 'root', 'root', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$pdo;
    }
}

?>