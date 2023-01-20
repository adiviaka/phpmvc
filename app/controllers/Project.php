<?php

class Project extends Controller{
    public function index(){
        $data['judul'] = 'Project';
        $data['table'] = $this->model('Project_model')->getAllData();
        if (isset($_GET['Search'])){
            $data['table']= array_filter($data['table'], function($project){
                if ($project['title'] == $_GET['Search']){
                    return true;
                }
                // return $project['title'] == $_GET['Search'];
            });
        }
        $this->view('templates/header', $data);
        $this->view('project/index', $data);
        $this->view('templates/footer');
    }
}
