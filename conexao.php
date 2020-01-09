<?php 


class Conectar{

    private $pdo;
    public function __construct($dbname, $host, $dbuser, $dbpassword)
    {
       try{
        $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpassword);
       } catch(PDOException $e){
           echo $e->getMessage();
       }
    }

    public function execute($sql){
        $stmt = $this->pdo->Query($sql);
        $this->array = $stmt->fetchAll();
        $this->numRows = $stmt->rowCount();
    }
    public function numRows(){
        return $this->numRows;
    }
    public function result(){
        return $this->array;
    }
    
}







?>