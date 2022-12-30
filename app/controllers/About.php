<?php

class About
{
    public function index($nama = 'Divia', $umur = '20')
    {
        echo "Hi! My name is $nama, I'm $umur years old.";
    }
    public function page()
    {
        echo 'About/page';
    }
}
