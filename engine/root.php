<?php

/* 
 * CPU licence
 *Root class.
 * Here you can find Db connection and other root functions
 */

class root {
    private  $_link;


    public function __construct() {
       
        
        $this->_link = new mysqli(HOST,LOGIN,PASS,BASE);
        $this->_link->set_charset(CHARSET);
      
    }
    
    public function login ($login,$pass){
    
        /**Secure check*/
        $login = trim(strip_tags($this->_link->real_escape_string($login)));
         $pass = md5(trim(strip_tags($this->_link->real_escape_string($pass))));
        
       $res = $this->_link->query("SELECT id FROM users WHERE login='$login' AND password='$pass' ");
         
        if($res->num_rows==1)return true;else return false;
       
        
    }
    }

