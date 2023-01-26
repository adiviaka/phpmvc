<?php
session_start ();
require_once '../app/init.php';

$app = new App;

if(!isset($_SESSION['database']))
{
    $database = new Database;
};