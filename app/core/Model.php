<?php

Class Model
{
    // // protected $table;
    // private $dbh; //database handler
    // private $stmt;

    // public function getTable()
    // { 
    //     return $this->table;
    // }

    // public function __construct()
    // {
    //     //data source name
    //     $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //     try{
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     }catch(PDOException $e){
    //         die($e->getMessage());
    //     }
    // }

    // public function getAllData()
    // {
    //     $this->stmt = $this->dbh->prepare("SELECT * FROM project");
    //     $this->stmt->execute();
    //     return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        // return array_filter($_SESSION['database'][$this->table], function($item){
        //     if (isset($item['is deleted'])){
        //         return $item['is deleted'] == false;
        //     }else{
        //         return true;
        //     }
        // });   
    // }
}