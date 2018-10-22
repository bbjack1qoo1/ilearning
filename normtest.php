<?php

<<<<<<< HEAD
	require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
/*
=======
    session_start();  
    
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }
	
    /*
>>>>>>> e1aeca1997ed972b9ca9ef7d2d05ddbb0485daa2
    $qnum = 1;
    $qa = 'A';
    $qb = 'B';
    $qc = 'C';
    $qd = 'D';
<<<<<<< HEAD


    

=======
    */

    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
    /*
>>>>>>> e1aeca1997ed972b9ca9ef7d2d05ddbb0485daa2
    $smarty->assign("question_number",$qnum);
    //$smarty->assign("question_audio","templates/audio/normtest/unitsound/".$qnum.".mp3");//題目的聲音檔
    $smarty->assign("QA",$qa);
    $smarty->assign("QB",$qb);
    $smarty->assign("QC",$qc);
<<<<<<< HEAD
    $smarty->assign("QD",$qd);*/


    $smarty->display("normtest.html");

    

    
=======
    $smarty->assign("QD",$qd);
    */
    if($username==NULL){
        $smarty->assign("login", "login");
    }else{
        $smarty->assign("login", "logout");
    }

    $smarty->display("normtest.html");

>>>>>>> e1aeca1997ed972b9ca9ef7d2d05ddbb0485daa2
?>