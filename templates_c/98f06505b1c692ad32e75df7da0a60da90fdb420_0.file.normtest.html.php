<?php
/* Smarty version 3.1.33, created on 2018-10-24 10:35:13
  from 'D:\xampp\htdocs\ilearning\templates\normtest.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd02ec1ea9f56_50993237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f06505b1c692ad32e75df7da0a60da90fdb420' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ilearning\\templates\\normtest.html',
      1 => 1540370113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd02ec1ea9f56_50993237 (Smarty_Internal_Template $_smarty_tpl) {
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
				<h4>聽力測驗共有三大題，分為單元音、單輔音、雙輔音。</h4>
				<h4>每大題共有兩部分(A)選出正確的字母(B)選出正確的讀音。</h4>
		</div>
		<div class="row">
			<!-- 範例區塊 -->
			<div class="container" style="border: 1px solid #cecece; text-align: left; padding-bottom: 20px;">
				<div class="container" >
					<!-- 題號區 -->
					<div class="container">
						<h2><strong>一、單元音</strong></h2>
						<div class="col-sm-4">
							<h2><strong>選出正確的字母 </strong> </h2>
						</div>
						<div class="col-sm-4"> 
							<h2><strong>第x題 / 共28題</strong> </h2>
						</div>
					</div>
					<!-- 音檔、選擇區 -->
					<div class="container col-sm-8">
						<!-- 音檔播放區 -->
					    <div class="container" style="padding-top: 15px;">
					    	<audio src="templates/audio/normtest/unitsound/q3.mp3" controls="controls" controlsList="nodownload" oncontextmenu="return false">
					    	</audio>
					    </div>
					    <!-- 選擇區 -->
					    <div class="container" style="padding-top: 15px">
					    	<div class="row" style="padding-top: 10px; ">
					    		<div class="col-sm-3" >
					    			<button type="button" class="btn btn-secondary btn-block" onclick="example_clickoption('A')">A : i</button>
					    		</div>
					    		<div class="col-sm-3" >
					    			<button type="button" class="btn btn-secondary btn-block" onclick="example_clickoption('B')">B : e</button>
					    		</div>
					    	</div>
					    	<div class="row " style="padding-top: 10px; ">
					    		<div class="col-sm-3" >
					    			<button type="button" class="btn btn-secondary btn-block" onclick="example_clickoption('C')">C : ư</button>
					    		</div>
					    		<div class="col-sm-3" >
					    			<button type="button" class="btn btn-secondary btn-block" onclick="example_clickoption('D')">D : ê</button>
					    		</div>
					    	</div>
					    </div>
					</div>
					
				    <!-- 確認區 -->
				    <div class="container col-sm-3" >
			    		<div class="row" style="font-size: 50px" id="example_choosen_option"><strong>　</strong></div>
			    		<div class="row" style="padding-top: 10px"><button id="example_commit_btn" type="button" disabled="" class="btn" onclick="example_commit();">確認</button></div>
			    		<div class="row"><p>(點擊A、B、C、D後，按下確認，即可進入下一題。)</p></div>
			    	</div>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 10px;">
			<button  class="btn btn-success" onclick="start_test();" style="font-size: 40px">開始</button>
		</div>
	</div>
	<!-- 題目及測驗整體 -->
	<div id="test_zone" class="container" style="display: none;">
		<!-- 第一部 -->
		<div id="part1_container" class="container" >
			<!-- 題號區 -->
			<div class="container">
				<h2><strong><span id="part1_question_type"></span></strong></h2>
				<div class="col-sm-4">
					<h2><strong>選出正確的字母 </strong> </h2>
				</div>
				<div class="col-sm-4"> 
					<h2><strong>第<span id="part1_question_num"> </span>題 / 共28題</strong> </h2>
				</div>
			</div>
			<!-- 音檔、選擇區 -->
			<div class="container col-sm-8">
				<!-- 音檔播放區 -->
			    <div class="container" style="padding-top: 15px;">
			    	<audio id="part1_audio" src="" controls="controls" controlsList="nodownload" oncontextmenu="return false">
			    	</audio>
			    </div>
			    <!-- 選擇區 -->
			    <div class="container" style="padding-top: 15px">
			    	<div class="row" style="padding-top: 10px; ">
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('A');">A : <span id="part1_option_a">none</span></button>
			    		</div>
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('B');">B : <span id="part1_option_b">none</span></button>
			    		</div>
			    	</div>
			    	<div class="row " style="padding-top: 10px; ">
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('C');">C : <span id="part1_option_c">none</span> </button>
			    		</div>
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('D');">D : <span id="part1_option_d">none</span> </button>
			    		</div>
			    	</div>
			    </div>
			</div>
			
		    <!-- 確認區 -->
		    <div class="container col-sm-3" >
	    		<div class="row" style="font-size: 50px"><strong> <span id="part1_choosen_option" ></span>　</strong></div>
	    		<div class="row" style="padding-top: 10px"><button id="part1_commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    	</div>
		</div>
		
		<!-- 第二部分 -->
		<div id="part2_container" class="container" style=" display: none;" >
			<!-- 題號區 -->
			<div class="container">
				<h2><strong><span id="part2_question_type"></span></strong></h2>
				<div class="col-sm-4">
					<h2><strong>選出正確的發音 </strong> </h2>
				</div>
				<div class="col-sm-4"> 
					<h2><strong>第<span id="part2_question_num"> </span>題 / 共28題</strong> </h2>
				</div>
			</div>
		   	<!-- 題目選擇區 -->
		   	<div class="container col-sm-8">
		   		<div class="container col-sm-4 text-center" style="justify-content: center;"> 
		   			<h3><strong id="part2_question"></strong></h3>
		   			<h2 ><strong id="part2_question_content"> </strong></h2>
		   		</div>
		   		<div class="container col-sm-4" style="padding-top: 15px">
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
			<!-- 確認區 -->
		    <div class="container col-sm-3" >
	    		<div class="row" style="font-size: 50px"><strong> <span id="part2_choosen_option" ></span>　</strong></div>
	    		<div class="row" style="padding-top: 10px"><button id="part2_commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    	</div>

		</div>
	</div>
		

	    <!-- 確認 -->
	    <!-- <div class="container col-sm-4" style=" justify-content: center; padding-left: 10% ;padding-top: 90px;">
	    	<div class="row" style="font-size: 20px"><strong>(點擊左側A、B、C、D) 你的選擇 : <span id="choosen_option" ></span> 。 </strong></div>
	    	<div class="row" style="padding-top: 10px"><button id="commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    </div> -->

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
	    				<th></th>
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
