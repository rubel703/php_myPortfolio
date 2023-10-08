<?php
namespace App\classes\controller;
use App\classes\Home;

class HomeController extends Home
{
    private function page($page){
        if(file_exists("views/{$page}.php")){
            include_once "views/{$page}.php";
        }else{
            include_once "views/404.php";
        }
    }

    static function router($data = ""){
        if("home" == $data){
            $kkk = ['kjkj', 'kjij'];
            (new HomeController())->page($data);
        }elseif ("about" == $data){
            (new HomeController())->page($data);
        }
    }


}