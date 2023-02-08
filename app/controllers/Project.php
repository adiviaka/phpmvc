<?php

class Project extends Controller 
{
    public function index(){
        $data['judul'] = 'Project';
        // $data['table'] = $this->model('Project_model')->getAllData();
        $data['table'] = $this->model('Project_model')->getAllProject();
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
        $data['judul'] = 'Add Project';
        // $data['table'] = $this->model('Project_model')->getAllData();
        $data['table'] = $this->model('Project_model')->getAllProject();
        $this->view('templates/header', $data);
        $this->view('project/add', $data);
        $this->view('templates/footer');
    }

    public function addProject(){
        // if (!isset($_POST['title']) || strlen($_POST['title'])== 0 ){
        //     return header('Location: '.BASEURL.'/project/add');
        // };

        // if (!isset($_POST['jobdesk']) || strlen($_POST['jobdesk'])== 0 ){
        //     return header('Location: '.BASEURL.'/project/add');
        // };
        // array_push($_SESSION['database']['project'], $_POST);
        
        if ( $this->model('Project_model')->addProject($_POST) > 0){
            header('Location: '.BASEURL.'/project');
            exit;
        }
        header('Location: '.BASEURL.'/project');
    }

    public function edit($index){
        $data['judul'] = 'Edit Project';
        // $data['table'] = $this->model('Project_model')->getAllData();
        $data['table'] = $this->model('Project_model')->getDatabyIndex($index);
        $this->view('templates/header', $data);
        $this->view('project/edit', $data);
        $this->view('templates/footer');
    }

    public function getEdit(){
        echo json_encode ($this->model('Project_model')->getDatabyIndex($_POST['index']));
    }

    public function editProject(){
        if ( $this->model('Project_model')->editProject($_POST) > 0){
            header('Location: '.BASEURL.'/project');
            exit;
        }
        // $title = $_GET['title'];
        // $newdata = $_POST;
        // $data = array_map(function ($editproject) use ($title, $newdata) {
        //     return $editproject["title"] == $title ? $newdata : $editproject;
        // }, $_SESSION['database']['project']);

        // $title = $_GET['title'];
        // $update = array_push($_SESSION['database']['project'], $_POST);
        // $project = current (array_filter ($_SESSION['database']['project'],function($project){
        //     return $project['title'] == $_GET['title'];
        // }));
        // // if (isset($project)){
        // //     $data['table']= array_replace($_SESSION, $project);
        // // }
        // array_replace ($project, $update);
        // array_replace($_SESSION['database']['project'], $_POST);
        // array_push ($_SESSION['database']['project'], $_POST);
        
        // $_SESSION['database']['project'] = $data;
        // header('Location: '.BASEURL.'/project');
    }

    public function delete(){
        // $index = $_GET['index'];
        // unset($_SESSION['database']['project'][$index]);
        if ($this->model('Project_model')->deleteProject($_GET['index']) > 0){
            header('Location: '.BASEURL.'/project');
            exit;
        }
        header('Location: '.BASEURL.'/project');
    }

    public function softdelete(){
        $id = $_GET['id'];
        $data['table'] = $this->model('Project_model')->softdeleteProject($id);
        // $_SESSION['database']['project'][$index]['is deleted'] = true;
        header('Location: '.BASEURL.'/project');
    }

    public function detail($index){
        $data['judul'] = 'Add Project';
        $data['table'] = $this->model('Project_model')->getDatabyIndex($index);
        $this->view('templates/header', $data);
        $this->view('project/detail', $data);
        $this->view('templates/footer');
    }
}