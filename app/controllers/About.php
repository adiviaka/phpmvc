<?php

class About
{
    public function index($nama = 'Adivia K. A.', $umur = '20')
    {
        echo "Hi! My name is $nama and I'm $umur years old.";
    }
    public function page()
    {
        echo 'About/page';
    }
}
