<?php
/* Smarty version 3.1.33, created on 2018-10-22 17:20:06
  from 'C:\Users\a0979\Documents\GitHub\ilearning\templates\info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcdeaa6d70ef7_51900859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f6c4fb76398b5b4196ce9fc6ae869ebed4d65cf' => 
    array (
      0 => 'C:\\Users\\a0979\\Documents\\GitHub\\ilearning\\templates\\info.html',
      1 => 1540218863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcdeaa6d70ef7_51900859 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/normtest.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" type="text/css" href="templates/CSS/navbar.css">

    <title>Document</title>

</head>
<body>

    <ul id="navbar_ul">
        <li id="navbar_li"><a class="active" href="index.php" class="nav navbar-inverse" >Home</a></li>
        <li id="navbar_li" style="float:right"><a href="info.php" >說明</a></li>
        <li id="navbar_li" style="float:right"><a href="#.php" >管理</a></li>
		<li id="navbar_li" style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
  	</ul>
    
    <div class="container" align="center" >
        <h3>工作進度</h3>
        <h3>[完成] 登入註冊功能</h3>
        
    </div>


</body>
</html><?php }
}
