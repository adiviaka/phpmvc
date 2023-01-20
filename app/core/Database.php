<?php

class Database 
{
    public function __construct()
    {
        $_SESSION['database'] = [
            "users"=>[
                ["id"=>1,
                "name"=>"Adivia Khusnul Aisha",
                "email"=>"adiviaka@gmail.com"
            ],
            ["id"=>2,
            "name"=>"Alya Zahra Fatikha",
            "email"=>"alyasemarang@gmail.com"
            ]
            ],
            "project"=>[
                [
                "title"=>"Portofolio Dashboard",
                "jobdesk"=>"Back-end Developer"
            ],
                [
                "title"=>"Portofolio Website",
                "jobdesk"=>"Front-end Developer"
                ]
            ]
        ];
    }
}