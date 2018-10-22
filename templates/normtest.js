

// 測驗區變數
var num ,
	question_type,
	test_zone,
	option_a ,
	option_b ,
	option_c ,
	option_d ,
	audio,
	part1_container,
	answer_array,
	choosen_option,
	commit_btn,
	// 第二部分才會用到的變數
	part2_container,
	part2_question,
	part2_audio_a,
	part2_audio_b,
	part2_audio_c,
	part2_audio_d
	;
//測驗結束後變數
var  thank_zone,
	result_tbody,
	true_false_table = {
		"student":"tester",
		"email":"vvv@gmail.com",
		"result":[null,null,null,null,null,null,null,null,null,null]
	};



window.onload = function(){	
	num=1;
	//開始測驗前的注意事項
	var notice_block = "聽力測驗開始\n注意事項:\n1.點選播放即撥放題目\n2.點選選項A、B、C、D則直接作答。"

	//alert(notice_block);
	// 初始測驗區
	test_zone = document.getElementById("test_zone");
	question_type = document.getElementById("question_type");
	question_num = document.getElementById("question_num");
	option_a = document.getElementById("option_a"),
	option_b = document.getElementById("option_b"),
	option_c = document.getElementById("option_c"),
	option_d = document.getElementById("option_d");
	audio = document.getElementById("audio");
	part1_container = document.getElementById("part1_container");
	choosen_option = document.getElementById("choosen_option");
	commit_btn = document.getElementById("commit_btn");
	answer_array = new Array();
	
	part2_container = document.getElementById("part2_container");
	part2_question = document.getElementById("part2_question");
	part2_audio_a = document.getElementById("part2_audio_a");
	part2_audio_b = document.getElementById("part2_audio_b");
	part2_audio_c = document.getElementById("part2_audio_c");
	part2_audio_d = document.getElementById("part2_audio_d");

	// 初始測驗結束區
	thank_zone = document.getElementById("thank_zone");
	result_tbody = document.getElementById("result_tbody");

	update_content();
}


// 選擇option
function clickoption(option){
	choosen_option.innerHTML=option;
	commit_btn.removeAttribute("disabled");


	
}

function update_content(){
	

	// 題目區。更新
	if (num<=4) {
		question_num.innerHTML=num;
		question_type.innerHTML = question_json1.question_type[0];
		option_a.innerHTML=question_json1.question[num-1].A;
		option_b.innerHTML=question_json1.question[num-1].B;
		option_c.innerHTML=question_json1.question[num-1].C;
		option_d.innerHTML=question_json1.question[num-1].D;
		audio.src = "templates/audio/normtest/"+question_json1.mp3_location+question_json1.question[num-1].mp3;
	}else{
		part1_container.style.display = "none";
		part2_container.style.display = "block";


		question_num.innerHTML=num;
		question_type.innerHTML = question_json1.question_type[1];
		part2_question.innerHTML = question_json1.question[num-1].question_text;
		part2_audio_a.src = "templates/audio/normtest/"+question_json1.mp3_location+question_json1.question[num-1].mp3a;
		part2_audio_b.src = "templates/audio/normtest/"+question_json1.mp3_location+question_json1.question[num-1].mp3b;
		part2_audio_c.src = "templates/audio/normtest/"+question_json1.mp3_location+question_json1.question[num-1].mp3c;
		part2_audio_d.src = "templates/audio/normtest/"+question_json1.mp3_location+question_json1.question[num-1].mp3d;

		

	}
	

}


// 送出選擇 及 是否已經答題完成
function commitanswer(){
	answer_array[num-1]=choosen_option.innerHTML;
	num++;
	
	if(num<=10){
		update_content();
	}else{
		test_zone.style.display = "none" ;
		thank_zone.style.display = "block";
		result();
	}

	// 送出後，將btn鎖死。並且更新choosen_option
	choosen_option.innerHTML=null;
	commit_btn.setAttribute('disabled','');
}


function result(){

	for (var i=0 ; i<answer_array.length; i++) {
		var row = result_tbody.insertRow(i);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);

		cell1.innerHTML = "Q"+(i+1).toString();
		cell2.innerHTML = answer_array[i];
		cell3.innerHTML = question_json1.answer[i];

		// 輸出結果
		if(cell2.innerHTML==cell3.innerHTML)
			output_true_false_table(i,1);
		else 
			output_true_false_table(i,0);
		
	}
	// alert最後結果 0或1
	alert(true_false_table.result);
}




function output_true_false_table(i,x){
	true_false_table.result[i]=x;
}





// 假題庫 part1

var question_json1 ={

	"question_type":["一、 Nghe và chọn : 選出正確的單元音","一、 Nghe và chọn : 選出正確的讀音"],

	"mp3_location":"unitsound/",

	"question":[
		{	"mp3":"q1.mp3",
			"A":"Ơ ơ" ,	"B":"Â â" ,	"C":"Â â" ,	"D":"E e"	},
		{	"mp3":"q2.mp3",
			"A":"Aa" ,	"B":"Oo" , 	"C":"Ê ê", 	"D":"Â â"	},
		{	"mp3":"q3.mp3",
			"A":"i" ,	"B":"i" ,	"C":"ư" ,	"D":"ê"		},
		{	"mp3":"q4.mp3",
			"A":"ơ" , "B":"a" , "C":"ô" , "D":"e"},
		{	"question_text" : "o",
			"mp3a":"q5/(A)Ô.mp3",	"mp3b":"q5/(B)O.mp3",	"mp3c":"q5/(C)Ơ.mp3",	"mp3d":"q5/(D)Ư.mp3",
			"A":"ô" , "B":"o" , "C":"ơ" , "D":"ư"},
		{	"question_text" : "Ơ",
			"mp3a":"q6/(A)Ơ.mp3",	"mp3b":"q6/(B)Ư.mp3",	"mp3c":"q6/(C)A.mp3",	"mp3d":"q6/(D)I.mp3",
			"A":"Ơ" , "B":"Ư" , "C":"A" , "D":"I"},
		{	"question_text" : "ư",
			"mp3a":"q7/(A)U.mp3",	"mp3b":"q7/(B)Ê.mp3",	"mp3c":"q7/(C)Ư.mp3",	"mp3d":"q7/(D)Ă.mp3",
			"A":"u" , "B":"ê" , "C":"ư" , "D":"â"},
		{	"question_text" : "Ă",
			"mp3a":"q8/(A)O.mp3",	"mp3b":"q8/(B)Ă.mp3",	"mp3c":"q8/(C)A.mp3",	"mp3d":"q8/(D)E.mp3",
			"A":"O" , "B":"Ă" , "C":"A" , "D":"E"},
		{	"question_text" : "Ơ",
			"mp3a":"q9/(A)Â.mp3",	"mp3b":"q9/(B)Ơ.mp3",	"mp3c":"q9/(C)Ư.mp3",	"mp3d":"q9/(D)A.mp3",
			"A":"Â" , "B":"Ơ" , "C":"Ư" , "D":"A"},
		{	"question_text" : "o",
			"mp3a":"q10/(A)U.mp3",	"mp3b":"q10/(B)Ô.mp3",	"mp3c":"q10/(C)O.mp3",	"mp3d":"q10/(D)Ư.mp3",
			"A":"u" , "B":"ô" , "C":"o" , "D":"ư"},

	],
	"answer":["B","A","D","D","B","A","C","B","B","C"]
};

var question_json2 = {
	"question_type":["二、 Nghe và chọn : 選出正確的單輔音","二、 Nghe và chọn : 選出正確的讀音"],

	"mp3_location":"singleconsonant/",

	"question":[
		{	"mp3":"q1.mp3",
			"A":"B" ,	"B":"P" ,	"C":"Đ" ,	"D":"M"	},
		{	"mp3":"q2.mp3",
			"A":"X" ,	"B":"L" , 	"C":"C", 	"D":"K"	},
		{	"mp3":"q3.mp3",
			"A":"k" ,	"B":"y" ,	"C":"d" ,	"D":"q"	},
		{	"mp3":"q4.mp3",
			"A":"d" , "B":"r" , "C":"s" , "D":"đ"},
		{	"question_text" : "đ",
			"mp3a":"q5/(A)L.mp3",	"mp3b":"q5/(B)Đ.mp3",	"mp3c":"q5/(C)C.mp3",	"mp3d":"q5/(D)N.mp3",
			"A":"l" , "B":"đ" , "C":"c" , "D":"n"},
		{	"question_text" : "s",
			"mp3a":"q6/(A)C.mp3",	"mp3b":"q6/(B)G.mp3",	"mp3c":"q6/(C)S.mp3",	"mp3d":"q6/(D)X.mp3",
			"A":"c" , "B":"g" , "C":"s" , "D":"x"},
		{	"question_text" : "t",
			"mp3a":"q7/(A)D.mp3",	"mp3b":"q7/(B)T.mp3",	"mp3c":"q7/(C)M.mp3",	"mp3d":"q7/(D)N.mp3",
			"A":"d" , "B":"t" , "C":"m" , "D":"n"},
		{	"question_text" : "G",
			"mp3a":"q8/(A)C.mp3",	"mp3b":"q8/(B)L.mp3",	"mp3c":"q8/(C)Đ.mp3",	"mp3d":"q8/(D)G.mp3",
			"A":"C" , "B":"L" , "C":"Đ" , "D":"G"},
		{	"question_text" : "M",
			"mp3a":"q9/(A)M.mp3",	"mp3b":"q9/(B)N.mp3",	"mp3c":"q9/(C)H.mp3",	"mp3d":"q9/(D)P.mp3",
			"A":"M" , "B":"N" , "C":"H" , "D":"P"},
		{	"question_text" : "p",
			"mp3a":"q10/(A)H.mp3",	"mp3b":"q10/(B)L.mp3",	"mp3c":"q10/(C)P.mp3",	"mp3d":"q10/(D)Y.mp3",
			"A":"h" , "B":"l" , "C":"p" , "D":"y"},

	],
	"answer":["A","C","D","A","B","C","B","D","A","C"]
};


var question_json3 = {
	"question_type":["三、Nghe và chọn : 選出正確的雙輔音","三、	Nghe và chọn : 選出正確的讀音"],

	"mp3_location":"doubleconsonant/",

	"question":[
		{	"mp3":"q1.mp3",
			"A":"GH gh" ,	"B":"CH ch" ,	"C":"TR tr" ,	"D":"NG ng"	},
		{	"mp3":"q2.mp3",
			"A":"NH nh" ,	"B":"TH th" , 	"C":"GI gi", 	"D":"NG ng"	},
		{	"mp3":"q3.mp3",
			"A":"KH kh" ,	"B":"GH gh" ,	"C":"PH ph" ,	"D":"QU qu"	},
		{	"mp3":"q4.mp3",
			"A":"QU qu" , "B":"PH ph" , "C":"TR tr" , "D":"NH nh"},
		{	"question_text" : "PH ph",
			"mp3a":"q5/(A)PH.mp3",	"mp3b":"q5/(B)TH.mp3",	"mp3c":"q5/(C)NG-NGH.mp3",	"mp3d":"q5/(D)GI.mp3",
			"A":"PH ph" , "B":"TH th" , "C":"NG ng" , "D":"GI gi"},
		{	"question_text" : "TR tr",
			"mp3a":"q6/(A)TH.mp3",	"mp3b":"q6/(B)GH.mp3",	"mp3c":"q6/(C)TR.mp3",	"mp3d":"q6/(D)PH.mp3",
			"A":"TH th" , "B":"GH gh" , "C":"TR tr" , "D":"PH ph"},
		{	"question_text" : "GH gh",
			"mp3a":"q7/(A)TR.mp3",	"mp3b":"q7/(B)GH.mp3",	"mp3c":"q7/(C)TH.mp3",	"mp3d":"q7/(D)QU.mp3",
			"A":"TR tr" , "B":"GH gh" , "C":"TH th" , "D":"Qu qu"},
		{	"question_text" : "NG ng",
			"mp3a":"q8/(A)GH.mp3",	"mp3b":"q8/(B)NH.mp3",	"mp3c":"q8/(C)PH.mp3",	"mp3d":"q8/(D)NG-NGH.mp3",
			"A":"GH gh" , "B":"NH nh" , "C":"PH ph" , "D":"NG ng"}

	],
	"answer":["B","C","A","D","A","C","B","D"]
};

