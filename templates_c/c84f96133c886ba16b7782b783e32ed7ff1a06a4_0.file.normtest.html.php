<?php
/* Smarty version 3.1.33, created on 2018-10-22 16:40:29
  from 'C:\Users\a0979\Documents\GitHub\ilearning\templates\normtest.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcde15d895a28_60092245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84f96133c886ba16b7782b783e32ed7ff1a06a4' => 
    array (
      0 => 'C:\\Users\\a0979\\Documents\\GitHub\\ilearning\\templates\\normtest.html',
      1 => 1540218767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcde15d895a28_60092245 (Smarty_Internal_Template $_smarty_tpl) {
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

	<title>常模測驗</title>

	<style>
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		
		li {
			float: left;
		}
		
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		
		li a:hover {
			background-color: #111;
		}
		</style>
    
</head>
<body>
	<!-- 登入後資訊區 -->
	<!--
	<div class="navbar navbar-inverse">
		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" >Language Test</a>
    	</div>
    	<ul class="nav navbar-nav navbar-right">
      		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    	</ul>
  </div>
	-->

	<ul id="navbar_ul">
		<li id="navbar_li"><a class="active" href="index.php" class="nav navbar-inverse" >Home</a></li>
		<li id="navbar_li" style="float:right"><a href="info.php" >說明</a></li>
		<li id="navbar_li" style="float:right"><a href="#.php" >管理</a></li>
		<li id="navbar_li" style="float:right"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</a></li>
	</ul>

	</div>
	<!-- 題目及測驗整體 -->
	<div id="test_zone" class="container text-center">		
		<!-- 題號區 -->
		<div class="container">
			<h2><span id="question_type"></span></h2>
			<h3>第 <span id="question_num"></span> 題</h3>
		</div>
		<!-- 音檔播放區 -->
	    <div class="container" style="display: flex; justify-content: center; ">
	    	<audio id="audio" src="" controls="controls">
	    	</audio>
	    </div>
	    <!-- 選擇區 -->
	    <div class="container" >
	    	<div class="row" style=" display: flex; justify-content: center;">
	    		<div class="col-sm-4" >
	    			<button class="btn" onclick="clickoption('A');">A : <span id="option_a">none</span></button>
	    		</div>
	    		<div class="col-sm-4" >
	    			<button class="btn" onclick="clickoption('B');">B : <span id="option_b">none</span></button>
	    		</div>
	    	</div>
	    	<div class="row " style=" display: flex; justify-content: center;">
	    		<div class="col-sm-4" >
	    			<button class="btn" onclick="clickoption('C');">C : <span id="option_c">none</span> </button>
	    		</div>
	    		<div class="col-sm-4" >
	    			<button class="btn" onclick="clickoption('D');">D : <span id="option_d">none</span> </button>
	    		</div>
	    	</div>
	    </div>
	    <!-- 確認 -->
	    <div class="container" style="display: flex; justify-content: center; padding-top: 20px;">
	    	<div class="col-sm-3 text-center"><strong>你的選擇 : <span id="choosen_option"></span></strong></div>
	    	<button id="commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button>
	    </div>
	    
	</div>
	
    <!-- 測驗結束後 -->
    <div id="thank_zone" class="container" style="display: none; ">
    	<!-- 作答情形區 -->
    	<div class="container col-sm-3 text-center">
    	   	<h2 class="row">Thanks for Testing </h2>
    	   	<table class="table">
	    		<thead>
	    			<tr>
	    				<th>Question</th>
	    				<th>YourAnswer</th>
	    				<th>CorrectAnswer</th>
	    			</tr>
	    		</thead>
	    		<tbody id="result_tbody">
	    			
	    		</tbody>
    		</table>
    		<!-- 回到index.html -->
    		<button type="button" onclick="location.href='normtest.php'" class="btn btn-primary" >回常模測試主頁</button>
    	</div>
    </div>
</body>
</html><?php }
}
