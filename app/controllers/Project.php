<?php

class Project extends Controller 
{
    public function index(){
        $data['judul'] = 'Project';
        $data['table'] = $this->model('Project_model')->getAllData();
        if (isset($_GET['Search'])){
            $data['table']= array_filter($data['table'], function($project){
                if (strtolower($project['title']) == strtolower($_GET['Search'])){
                    return true;
                }
                // return $project['title'] == $_GET['Search'];
            });
        }
        $this->view('templates/header', $data);
        $this->view('project/index', $data);
        $this->view('templates/footer');
    }

    public function add(){
        $data['judul'] = 'Project';
        $data['table'] = $this->model('Project_model')->getAllData();
        $this->view('templates/header', $data);
        $this->view('project/add', $data);
        $this->view('templates/footer');
    }

    public function addProject()
    {
        if (!isset($_POST['title']) || strlen($_POST['title'])== 0 ){
            return header('Location: '.BASEURL.'/project/add');
        };

        if (!isset($_POST['jobdesk']) || strlen($_POST['jobdesk'])== 0 ){
            return header('Location: '.BASEURL.'/project/add');
        };
        array_push($_SESSION['database']['project'], $_POST);
        header('Location: '.BASEURL.'/project');
    }

    public function edit(){
        
    }

}