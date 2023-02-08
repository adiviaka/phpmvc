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
        $this->db->query('SELECT * FROM ' . $this->table. " WHERE is_deleted=0") ;
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

    public function addProject($data){
        $query = "INSERT INTO project
                    VALUES
                    ('', :title, :jobdesk, :status, '')";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('jobdesk', $data['jobdesk']);
        $this->db->bind('status', $data['status']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteProject($index){
        $query = "DELETE FROM project WHERE id_project=:index";

        $this->db->query($query);
        $this->db->bind('index', $index);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editProject($data){
        $query = "UPDATE project SET
                    title = :title,
                    jobdesk = :jobdesk,
                    status = :status
                    WHERE id_project = :id";

        $this->db->query($query);
        $this->db->bind('title', $data['title']);
        $this->db->bind('jobdesk', $data['jobdesk']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function softdeleteProject($id){
        $query = "UPDATE project SET
                    is_deleted = 1
                    WHERE id_project = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    
}