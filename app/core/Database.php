<?php

class Database 
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    private $dbh; //database handler
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    
    public function bind($param, $value, $type = null){
        if (is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount();
    }

        // $_SESSION['database'] = [
        //     "user"=>[
        //         ["id"=>1,
        //         "name"=>"Adivia Khusnul Aisha",
        //         "email"=>"adiviaka@gmail.com"
        //     ],
        //         ["id"=>2,
        //         "name"=>"Alya Zahra Fatikha",
        //         "email"=>"alyasemarang@gmail.com"
        //     ]
        //     ],
        //     "project"=>[
        //         [
        //         "title"=>"Portofolio Dashboard",
        //         "jobdesk"=>"Back-end Developer",
        //         "is deleted"=>false
        //     ],
        //         [
        //         "title"=>"Portofolio Website",
        //         "jobdesk"=>"Front-end Developer",
        //         "is deleted"=>false
        //         ]
        //     ]
        // ];
}