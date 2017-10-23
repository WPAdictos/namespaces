<?php
namespace src\lib;
use PDO;
use FluentPDO;

class Database{

    public static function getConection(){
        $pdo = new PDO ("mysql:dbname=test", "root", "root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return new FluentPDO($pdo);
    }

}