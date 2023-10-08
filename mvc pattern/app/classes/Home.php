<?php
namespace App\classes;

class Home
{

    public function index(){
        return header("Location: route.php?page=home");
    }

}