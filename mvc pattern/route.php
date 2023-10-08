<?php

require_once "vendor/autoload.php";
use App\classes\controller\HomeController;

(new HomeController())->router($_GET['page']);
