<?php  
    session_start();
    $postback = isset($_POST["postback"]);  

    if ($postback)
    {
        
        //處理登入資訊
        $account = $_POST["account"];
        $password = $_POST["password"];

        $login_time = date("Y-m-d  H:i:s");

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
        $sql = "SELECT * FROM login WHERE account=? AND password=? ";
        $stmt = $db->prepare($sql);
        if (!$stmt) {
            die("Connection failed: " . $db->connect_error);
        } 

        //step 3 bind_param  
        if(!$stmt->bind_param('ss', $account, $password )) die($stmt->error);

        //step 4 execute
        if (!$stmt->execute()) die("Error:".$stmt->error);
             
        //step 5 fetch
        $result = $stmt->get_result();
        $rows = array();

        if ($row = $result->fetch_assoc()) {

            $_SESSION["account"] = $row["account"];
            $_SESSION["username"] = $row["username"];
            header("Location: index.php");

        }
        else{
            header("Location: login.php");
        }

        $stmt->close();
        $db->close();

        //step 1 connect
        $db = new mysqli($servername, $dbaccount, $dbpassword, $dbname);
            
        //Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        //step 2  prepare
        $db->set_charset("utf8");

        $sql = "UPDATE  login SET login_time=? WHERE account=?";

        $stmt = $db->prepare($sql);
        if (!$stmt) {
            die("Connection failed: " . $db->connect_error);
        } 

        //step 3 bind_param  
        if(!$stmt->bind_param('ss', $login_time, $account)) die($stmt->error);


        //step 4 execute
        if (!$stmt->execute()) 
            die("Error:".$stmt->error);
        else
        {
            //echo $stmt->insert_id;
            $stmt->close();
            $db->close();
            //header("Location: login.php");
        }

        
        $stmt->close();
        $db->close();
    }
    else
    {
        //顯示登入網頁
        require_once "libs/Smarty.class.php";
        $smarty = new Smarty();
        
        $smarty->display("login.html");

    }

?>