<?php
    session_start();  
    
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    }
    else{
        $username = NULL;
    }
    
    /*
    $servername = "localhost";
    $dbusername = "root";
    $password = "";
    $dbname = "PublishBoard";

    // step 1 connect
    $db = new mysqli($servername, $dbusername, $password, $dbname);
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 

    //step 2  prepare
    $db->set_charset("utf8");
    $sql = "SELECT * FROM bulletin WHERE EndTime >= ?";    
    $stmt = $db->prepare($sql);
    if (!$stmt) {
        die("Connection failed: " . $db->connect_error);
    } 

    //step 3 bind_param
    $now = date("Y/m/d H:i:s",time());
    if(!$stmt->bind_param('s', $now)) die($stmt->error);

    //step 4 execute
    if (!$stmt->execute()) die("Error:".$stmt->error);
             
    //step 5 fetch
    $result = $stmt->get_result();
    $rows = array();

    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    //結束table
    $count = $result->num_rows;
    $stmt->close();
    $db->close();                
    */        
    require_once "libs/Smarty.class.php";
    $smarty = new Smarty();
    /*
    $smarty->assign("rows", $rows);
    $smarty->assign("count", $count);
    */
    $smarty->assign("username", $username);

    if($username==NULL){
        $smarty->assign("login", "login");
    }else{
        $smarty->assign("login", "logout");
    }
            
    $smarty->display("index.html");

?>
  