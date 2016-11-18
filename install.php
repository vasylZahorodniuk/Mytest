<?php
include "config.php";

$mysql =   new mysqli(HOST,LOGIN,PASS,BASE);
$mysql->query("CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT,
   login VARCHAR(80) NOT NULL,
   password VARCHAR(200) NOT NULL,
   
   
     PRIMARY KEY (id),
UNIQUE INDEX (id)
  ) ENGINE=INNODB;");
