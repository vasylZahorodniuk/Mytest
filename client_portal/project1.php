<?php

//preventing from outside load

if( !defined("SECURE") && SECURE!=="rewedew32323"){
    header("Location:http://".$_SERVER['HTTP_HOST']);
    die();
}else{
    ?>
        PROJECT 1
        <?php
}

