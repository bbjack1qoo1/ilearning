<?php

    session_start();  
    
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }

    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();

    if($username==NULL){
        $smarty->assign("login", "login");
    }else{
        $smarty->assign("login", "logout");
    }

    print(date("Y-m-d"));

    $smarty->display("info.html");

?>