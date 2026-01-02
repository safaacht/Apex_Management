<?php

namespace Apex;
use PDO;

class Database{
    private static $host="localhost";
    private static $db_name="apex_management";
    private static $user="root";
    private static $mdp="";
    private static $port=3307;

    private static $conn=null;

    public static function getConnection(){
        if(self::$conn===null){
            $dsn="mysql:host=" . self::$host . ";dbname=" . self::$db_name . ";port=" . self::$port . ";charset=utf8";
            self::$conn= new PDO($dsn,self::$user,self::$mdp,[
                PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$conn;
    }
   
} 
