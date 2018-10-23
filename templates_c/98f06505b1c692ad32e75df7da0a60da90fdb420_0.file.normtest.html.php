<?php
/* Smarty version 3.1.33, created on 2018-10-23 14:50:57
  from 'D:\xampp\htdocs\ilearning\templates\normtest.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcf19317e1389_35516764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f06505b1c692ad32e75df7da0a60da90fdb420' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ilearning\\templates\\normtest.html',
      1 => 1540299057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf19317e1389_35516764 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style >
    	
    	.btn{
    		
    		font-size: 20px;
    	}
    </style>

    <title>常模測驗</title>
</head>
<body>
	<!-- 登入後資訊區 navbar-->
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
  	</div>
	<!-- 題前提示 -->
	<div class="container text-center" id="pre_page">
		<div class="row">
			<h2><strong>越南語測驗</strong></h2>	
		</div>
		<div class="row">
			<button  class="btn btn-success" onclick="start_test();" style="font-size: 40px">開始測驗</button>
		</div>
		<div class="row">
				<h3>注意事項:</h3>
				<h4>題目會有三大題，分為單元音、單輔音、雙輔音。</h4>
				<h4>(請按下測驗開始，將依順序測驗)</h4>
				<h4><strong>一、單元音</strong> </h4>
				<h5>　　　　　　　　A、選出正確的單元音</h5>
				<h5>　　　　　　　B、選出正確的讀音</h5>
				<h4><strong>二、單輔音</strong> </h4>
				<h5>　　　　　　　　A、選出正確的單元音</h5>
				<h5>　　　　　　　B、選出正確的讀音</h5>
				<h4><strong>三、雙輔音</strong> </h4>
				<h5>　　　　　　　　A、選出正確的單元音</h5>
				<h5>　　　　　　　B、選出正確的讀音</h5>
		</div>
	</div>
	<!-- 題目及測驗整體 -->
	<div id="test_zone" class="container text-center" style="display: none;">
		
		<!-- 題號區 -->
		<div class="container">
			<h2><span id="question_type"></span></h2>
			<h3>第 <span id="question_num"></span> 題</h3>
		</div>
		<!-- 第一部 -->
		<div id="part1_container" class="container" style=" justify-content: center;">
			<!-- 音檔播放區 -->
		    <div class="container" >
		    	<audio id="audio" src="" controls="controls" controlsList="nodownload" oncontextmenu="return false">
		    	</audio>
		    </div>
		    <!-- 選擇區 -->
		    <div class="col-sm-offset-4" >
		    	<div class="row" style="padding-top: 10px; padding-left: 30px;">
		    		<div class="col-sm-3" >
		    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('A');">A : <span id="option_a">none</span></button>
		    		</div>
		    		<div class="col-sm-3" >
		    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('B');">B : <span id="option_b">none</span></button>
		    		</div>
		    	</div>
		    	<div class="row " style="padding-top: 10px; padding-left: 30px;">
		    		<div class="col-sm-3" >
		    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('C');">C : <span id="option_c">none</span> </button>
		    		</div>
		    		<div class="col-sm-3" >
		    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('D');">D : <span id="option_d">none</span> </button>
		    		</div>
		    	</div>
		    </div>
		</div>
		


	    <!-- 第二部分 -->
	    <div class="container" style="  justify-content: center; display: none;" id="part2_container">
	    	<!-- 題目選擇區 -->
	    	<div class="row" style="justify-content: center;"> <strong><h3 id="part2_question"></h3></strong></div>
	    	<div class="container col-sm-4  col-sm-offset-4">
				
	    		<div class="row" style="padding-top: 10px">
	    			<button class="btn" id="part2_option_a" onclick="clickoption('A')"><strong>A</strong><audio id="part2_audio_a" src="" controls="controls" controlsList="nodownload"></audio></button>
	    		</div>
				
				<div class="row" style="padding-top: 10px">
					<button class="btn" id="part2_option_b" onclick="clickoption('B')"><strong>B</strong><audio id="part2_audio_b" src="" controls="controls" controlsList="nodownload"></audio></button>
				</div>

				<div class="row" style="padding-top: 10px">
					<button class="btn" id="part2_option_c" onclick="clickoption('C')"><strong>C</strong><audio id="part2_audio_c" src="" controls="controls" controlsList="nodownload"></audio></button>
				</div>
	    	
	    		<div class="row" style="padding-top: 10px">
	    			<button class="btn" id="part2_option_d" onclick="clickoption('D')"><strong>D</strong><audio id="part2_audio_d" src="" controls="controls" controlsList="nodownload"></audio></button>
	    		</div>

	    	</div>
	    	
	    </div>

	    <!-- 確認 -->
	    <div class="col-sm-5 col-sm-offset-4" style=" justify-content: center; padding-top: 20px;">
	    	<strong>(點擊上方A、B、C、D)你的選擇 : <span id="choosen_option" style="font-size: 20px;"></span> 。 </strong>
	    	<button id="commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button>
	    </div>

	</div>
	
    <!-- 測驗結束後 -->
    <div id="thank_zone" class="container" style="display: none; ">
    	<!-- 作答情形區 -->
    	<div class="container col-sm-3 col-sm-offset-4 text-center">
    	   	<h2 class="row">Thanks for Testing </h2>
    	   	<h3 class="row">Correct rate : <span id="correct_num"></span>/28</h3>
    	   	<table class="table" style="display: none;">
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
