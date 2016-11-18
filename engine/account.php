<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_set_cookie_params(900,"/");
session_start();
if(!isset($_SESSION['u_name']) || !isset($_SESSION['u_pass'])){
     header("Location:http://".$_SERVER['HTTP_HOST']);
    die();
}
$login = $_SESSION['u_name'];
$pass  = $_SESSION['u_pass'];
include "config.php";
include "root.php";

$root = new root();

if($root->login($login, $pass))
{
    
define("SECURE","rewedew32323");
     if(!isset($_GET['page']))$_GET['page'] = "/";
    $route = $_GET['page'];
   
    switch($route){
        
        case "/": 
            ?>
<h1>CRM</h1>                
<hr>
<a href="http://<?=$_SERVER['HTTP_HOST']?>/engine/account.php?page=pr1">Project1</a>

<a href="http://<?=$_SERVER['HTTP_HOST']?>/engine/account.php?page=pr2">Project2</a>

                <?php
            break;
        case "pr1": include "../client_portal/project1.php";
            break;
        case "pr2": include "../client_portal/project2.php";
    }
    
}else{
     header("Location:http://".$_SERVER['HTTP_HOST']);
    die();
}


