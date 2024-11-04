<?php
session_start();
define("BASE_PATH",dirname(__DIR__).DIRECTORY_SEPARATOR);
define("ADMIN_PATH",__DIR__.DIRECTORY_SEPARATOR);
define("BASE_URL","http://127.0.0.1/Dataabse/lec%204/");

require_once(BASE_PATH.'data/connection.php');
require_once(BASE_PATH.'core/sessions.php');
require_once(BASE_PATH.'core/database.php');
require_once(BASE_PATH.'core/request.php');
require_once(BASE_PATH.'core/response.php');

//Routing
$routes = [
    "home",
    "add-post",
    "store-post",
    "posts",
    "delete-post",
    "edit-post"

];

if (isset($_GET['page'])){
    $page = $_GET['page'];
    if(in_array($page,$routes)){
        require_once ADMIN_PATH.'controllers/'.$page.".controller.php";

    }else {
        require_once "views/404.views.php";
    }
}else{
    require_once "views/home.views.php";
}
