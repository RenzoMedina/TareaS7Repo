<?php 

namespace Database;

class Connection{
    protected const DBlocal = "localhost";
    protected const DBname = "ie_secundaria";
    protected const DBuser = "root";
    protected const DBpass = "";

    public static function start(){
        $dns = "mysql:host=".self::DBlocal.";dbname=".self::DBname;
        try {
            $pdo = new \PDO ($dns, self::DBuser, self::DBpass);
            return $pdo;
        } catch (\PDOException $po) {
            dd($po->getMessage());
        }
    }
}