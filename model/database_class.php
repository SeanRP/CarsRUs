<?php

class Database{
    private $host = "localhost";
    private $user = "mgs_user";
    private $pwd = "pa55word";
    private $dbName = "Cars_R_Us_DB";
 
    private function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $connect = new PDO($dsn, $this->user, $this->pwd);
        $connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        error_reporting(E_ALL);
        $connect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $connect;
    }

    function run($sql, $params = NULL){
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

}
?>