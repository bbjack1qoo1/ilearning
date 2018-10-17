<?php  
    session_start();
    $postback = isset($_POST["postback"]);
    
    if ($postback)
    {
        //處理登入資訊
        
        $account = $_POST["account"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $type = "註冊會員";
        $state = "True" ;

        $servername = "localhost";
        $dbaccount = "root";
        $dbpassword = "";
        $dbname = "ilearning";

        // step 1 connect
        $db = new mysqli($servername, $dbaccount, $dbpassword, $dbname);
        
        // Check connection
        if ($db->connect_error)  die("Connection failed: " . $db->connect_error);

        //step 2  prepare
        $db->set_charset("utf8");
        
        $sql = "INSERT INTO  login (account, password, username, email)
                values (?, ?, ?, ?)";

        $stmt = $db->prepare($sql);
        if (!$stmt) {
            die("Connection failed: " . $db->connect_error);
        } 
                    
        //step 3 bind_param  
        if(!$stmt->bind_param('ssss', $account, $password, $username, $email)) die($stmt->error);

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
    }

    else
    {
        //顯示登入網頁
        require_once "libs/Smarty.class.php";
        $smarty = new Smarty();
        $smarty->display("register.html");
        
    }
?>