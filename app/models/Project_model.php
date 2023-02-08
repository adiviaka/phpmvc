<?php

class Project_model 
// extends Model
{
    // protected $table = "project";
    private $table = "project";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProject()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
        // $this->stmt = $this->dbh->prepare("SELECT * FROM project");
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDatabyIndex($index){
        $this->db->query('SELECT * FROM ' . $this->table . " WHERE id_project=:index");
        $this->db->bind('index', $index);
        return $this->db->single();
        // $this->stmt = $this->dbh->prepare("SELECT * FROM project");
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    } 
}