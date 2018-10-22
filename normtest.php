<?php

    session_start();  
    
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }
	
    /*
    $qnum = 1;
    $qa = 'A';
    $qb = 'B';
    $qc = 'C';
    $qd = 'D';
    */

    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
    /*
    $smarty->assign("question_number",$qnum);
    //$smarty->assign("question_audio","templates/audio/normtest/unitsound/".$qnum.".mp3");//題目的聲音檔
    $smarty->assign("QA",$qa);
    $smarty->assign("QB",$qb);
    $smarty->assign("QC",$qc);
    $smarty->assign("QD",$qd);
    */
    if($username==NULL){
        $smarty->assign("login", "login");
    }else{
        $smarty->assign("login", "logout");
    }

    $smarty->display("normtest.html");

?>