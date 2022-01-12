<?php

namespace app\database;

class Connect
{
    private static $pdo = null;

    public static function connect(){
        try {
           if(!static::$pdo){
               static::$pdo = new PDO("mysql:host=localhost; dbname=cart", "root", "",[
                   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
               ]);              
           }
           return static::$pdo;
        } catch (PDOException $e) {
            ($e->getMessage());
        }
    }
}