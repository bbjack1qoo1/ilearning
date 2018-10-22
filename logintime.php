<?php  

    //處理登入資訊
    $login_time = date("Y-m-d");


    $servername = "localhost";
    $dbaccount = "root";
    $dbpassword = "";
    $dbname = "ilearning";

    //step 1 connect
    $db = new mysqli($servername, $dbaccount, $dbpassword, $dbname);
        
    //Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    //step 2  prepare
    $db->set_charset("utf8");

    $sql = "INSERT INTO  login (login_time) values (?)";

    $stmt = $db->prepare($sql);
    if (!$stmt) {
        die("Connection failed: " . $db->connect_error);
    } 

    //step 3 bind_param  
    if(!$stmt->bind_param('s', $login_time)) die($stmt->error);


    //step 4 execute
    if (!$stmt->execute()) 
        die("Error:".$stmt->error);
    else
    {
        //echo $stmt->insert_id;
        $stmt->close();
        $db->close();
        header("Location: login.php");
    }

    $stmt->close();
    $db->close();

?>