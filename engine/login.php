<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_set_cookie_params(900,"/");
session_start();

if($_SERVER['REQUEST_METHOD']!=="POST"){ //secure access can be added here if needed like MD5 check for same origin
        
    header("Location:http://".$_SERVER['HTTP_HOST']);
            die();
        }

$login = $_POST['login'];
$pass = $_POST['pass'];
include "config.php";
define("SECURE","rewedew32323");
include "root.php"; 
$root = new root();

/*Setting session if correct*/
if($root->login($login,$pass)){
    $_SESSION['u_name'] = $login;
    $_SESSION['u_pass'] = $pass;
    
    echo "1";}else echo "0";


