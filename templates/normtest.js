// 題目區變數
var question_type;

// 測驗區變數
var num ,
	option_a ,
	option_b ,
	option_c ,
	option_d ,
	audio,
	test_zone,
	answer_array,
	choosen_option,
	commit_btn;
//測驗結束後變數
var  thank_zone,
	result_tbody,
	true_false_table = {
		"student":"tester",
		"no":"M06300000",
		"result":[null,null,null,null,null,null,null,null,null,null]
	};

// 假題庫
var question_json ={
	"question_type":["一、 Nghe và chọn: 選出正確的單元音","一、 Nghe và chọn: 選出正確的讀音"],

	"question":[
		{	"mp3":"q1.mp3",
			"A":"Ơ ơ" ,	"B":"Â â" ,	"C":"Â â" ,	"D":"E e"	},
		{	"mp3":"q2.mp3",
			"A":"Aa" ,	"B":"Oo" , 	"C":"Ê ê", 	"D":"Â â"	},
		{	"mp3":"q3.mp3",
			"A":"i" ,	"B":"i" ,	"C":"ư" ,	"D":"ê"		},
		{	"mp3":"q4.mp3",
			"A":"ơ" , "B":"a" , "C":"ô" , "D":"e"},
		{	"mp3a":"q5/(A)Ô.mp3",	"mp3b":"q5/(B)O.mp3",	"mp3c":"q5/(C)Ơ.mp3",	"mp3d":"q5/(D)Ư.mp3",
			"A":"ô" , "B":"o" , "C":"ơ" , "D":"ư"},
		{	"mp3a":"q6/(A)Ơ.mp3",	"mp3b":"q6/(B)Ư.mp3",	"mp3c":"q6/(C)A.mp3",	"mp3d":"q6/(D)I.mp3",
			"A":"Ơ" , "B":"Ư" , "C":"A" , "D":"I"},
		{	"mp3a":"q7/(A)U.mp3",	"mp3b":"q7/(B)Ê.mp3",	"mp3c":"q7/(C)Ư.mp3",	"mp3d":"q7/(D)Ă.mp3",
			"A":"u" , "B":"ê" , "C":"ư" , "D":"â"},
		{	"mp3a":"q8/(A)O.mp3",	"mp3b":"q8/(B)Ă.mp3",	"mp3c":"q8/(C)A.mp3",	"mp3d":"q8/(D)E.mp3",
			"A":"O" , "B":"Ă" , "C":"A" , "D":"E"},
		{	"mp3a":"q9/(A)Â.mp3",	"mp3b":"q9/(B)Ơ.mp3",	"mp3c":"q9/(C)Ư.mp3",	"mp3d":"q9/(D)A.mp3",
			"A":"Â" , "B":"Ơ" , "C":"Ư" , "D":"A"},
		{	"mp3a":"q10/(A)U.mp3",	"mp3b":"q10/(B)Ô.mp3",	"mp3c":"q10/(C)O.mp3",	"mp3d":"q10/(D)Ư.mp3",
			"A":"u" , "B":"ô" , "C":"o" , "D":"ư"},

	],
	"answer":["B","A","D","D","B","A","C","B","B","C"]

};

window.onload = function(){	
	num=1;
	
	//開始測驗前的注意事項
	var notice_block = "聽力測驗開始\n注意事項:\n1.點選播放即撥放題目\n2.點選選項A、B、C、D則直接作答。"

	//alert(notice_block);

	// 初始題目區
	question_type = document.getElementById("question_type");
	

	// 初始測驗區
	question_num = document.getElementById("question_num");
	option_a = document.getElementById("option_a"),
	option_b = document.getElementById("option_b"),
	option_c = document.getElementById("option_c"),
	option_d = document.getElementById("option_d");
	audio = document.getElementById("audio");
	test_zone = document.getElementById("test_zone");
	choosen_option = document.getElementById("choosen_option");
	commit_btn = document.getElementById("commit_btn");
	answer_array = new Array();
	
	// 初始測驗結束區
	thank_zone = document.getElementById("thank_zone");
	result_tbody = document.getElementById("result_tbody");

	update_content();
}


// 選擇option
function clickoption(option){
	choosen_option.innerHTML=option;
	commit_btn.removeAttribute("disabled");


	/*
	answer_array[num-1]=option;
	num++;
	
	if(num<=10){
		update_content();
	}else{
		test_zone.style.display = "none";
		thank_zone.style.display = "flex";
		result();
	}
	*/
}
// 送出選擇 及 是否已經答題完成
function commitanswer(){
	answer_array[num-1]=choosen_option.innerHTML;
	num++;
	
	if(num<=10){
		update_content();
	}else{
		test_zone.style.display = "none";
		thank_zone.style.display = "flex";
		result();
	}

	// 送出後，將btn鎖死。並且更新choosen_option
	choosen_option.innerHTML=null;
	commit_btn.setAttribute('disabled','');
}

function update_content(){
	

	// 題目區。更新
	if (num<=4) {
		question_type.innerHTML = question_json.question_type[0];
	}else{
		question_type.innerHTML = question_json.question_type[1];
	}
	

	// 測驗區。更新
	question_num.innerHTML=num;
	option_a.innerHTML=question_json.question[num-1].A;
	option_b.innerHTML=question_json.question[num-1].B;
	option_c.innerHTML=question_json.question[num-1].C;
	option_d.innerHTML=question_json.question[num-1].D;
	audio.src = "templates/audio/normtest/unitsound/"+question_json.question[num-1].mp3;	

}

function result(){

	for (var i=0 ; i<answer_array.length; i++) {
		var row = result_tbody.insertRow(i);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);

		cell1.innerHTML = "Q"+(i+1).toString();
		cell2.innerHTML = answer_array[i];
		cell3.innerHTML = question_json.answer[i];

		// 輸出結果
		if(cell2.innerHTML==cell3.innerHTML)
			output_true_false_table(i,1);
		else 
			output_true_false_table(i,0);
		
	}
	//alert(true_false_table.result);
}


function output_true_false_table(i,x){
	true_false_table.result[i]=x;
}