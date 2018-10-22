<?php
/* Smarty version 3.1.33, created on 2018-10-19 09:38:04
  from 'D:\xampp\htdocs\ilearning\templates\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc989dcd9aeb4_30315820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58edeebcf88cb5617d4386a20526b0725c74066' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ilearning\\templates\\login.html',
      1 => 1539927870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc989dcd9aeb4_30315820 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登入</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
            body
            {
                font-size: 12pt;
                line-height: 1.5;
            }

            .loginbox
            {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 280px;
            margin-top: -200px;
            margin-left: -150px;
            padding: 20px;
            background-color: rgba(80, 180, 180, 0.9);
            color:white;
            }
    </style>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
            <![endif]-->
</head>

<body>
    <div class="loginbox">
        <form id="form1" name="form1" action="login.php" method="post">
            <input type="hidden" name="postback" value="true">
            <div class="form-group">
                <label for="account">帳號</label>
                <input type="text" name="account" id="account" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div>
                <input type="submit" name="login" id="login" value="登入" class="btn btn-lg btn-danger" />
                <input type="button" value="返回首頁" onclick="location.href='index.php'" class="btn btn-lg btn-danger"/>
                <td><a href="register.php"> 註冊會員 </a></td>
            </div>
            

        </form>
    </div>
</body>

</html><?php }
}
