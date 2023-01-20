<?php

Class Model
{
    protected $table;

    public function getTable()
    {
        return $this->table;
    }

    public function getAllData()
    {
        return $_SESSION['database'][$this->table];   
    }
}