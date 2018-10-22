<?php

	require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
/*
    $qnum = 1;
    $qa = 'A';
    $qb = 'B';
    $qc = 'C';
    $qd = 'D';


    

    $smarty->assign("question_number",$qnum);
    //$smarty->assign("question_audio","templates/audio/normtest/unitsound/".$qnum.".mp3");//題目的聲音檔
    $smarty->assign("QA",$qa);
    $smarty->assign("QB",$qb);
    $smarty->assign("QC",$qc);
    $smarty->assign("QD",$qd);*/


    $smarty->display("normtest.html");

    

    
?>