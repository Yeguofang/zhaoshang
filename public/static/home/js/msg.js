// JavaScript Document
function showsubmenu(sid){
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none"){
eval("submenu" + sid + ".style.display=\"\";");
}
}
function hidesubmenu(sid){
whichEl = eval("submenu" + sid);
if (whichEl.style.display == ""){
eval("submenu" + sid + ".style.display=\"none\";");
}
}

function CheckForms(){
	var content =document.ly.contents.value;
	var name= document.ly.name.value;
	var phone =document.ly.tel.value;
	var company_id =document.ly.company_id.value;
	var email = document.ly.email.value;
	var token =  document.ly.__token__.value;
	var id= document.ly.id.value;
	var url= document.ly.url.value;

	if (content==""){	
	document.ly.contents.style.border = '1px solid #FA8072';
	window.document.getElementById('ts_contents').innerHTML='<span class=boxuserreg>留言内容不能为空</span>';
	document.ly.contents.focus();	
	return false;
	}
	if (name==""){	
	document.ly.name.style.border = '1px solid #FA8072';
	window.document.getElementById('ts_name').innerHTML='<span class=boxuserreg>请输入姓名</span>';
	document.ly.name.focus();	
	return false;
	}			
	var txt = /^1([38]\d|4[57]|5[0-35-9]|7[06-8]|8[89])\d{8}$/;
	if (phone=="" || !txt.test(phone)){
	document.ly.tel.style.border = '1px solid #FF0000';
	window.document.getElementById('phone').innerHTML='<span class=boxuserreg>请输入正确的手机号</span>';
	document.ly.tel.focus();	
	return false;
	}

	$.ajax({
		type: "post",
		async: false,
		url: url+id,
		//后台数据处理-下面有具体实现
		data: {
			name:name,
			phone:phone,
			content:content,
			email:email,
			company_id:company_id,
			token:token,
			id:id,
		},
		success: function (res) {
			if(res.code == 1){
				alert(res.msg);
				window.location.reload();
			}else{
				alert(res.msg);
				window.location.reload();
			}
		}
	});
}

function check_contents(){
	if (document.ly.contents.value ==""){
	window.document.getElementById('ts_contents').innerHTML='<span class=boxuserreg>留言内容不能为空</span>';
	}else{
	window.document.getElementById('ts_contents').innerHTML='<img src=/static/home/images/dui2.png>';
	window.document.ly.contents.style.border = '1px solid #dddddd';
	}
}

function check_mobile(){ 
if (document.ly.tel.value ==""){	
	document.getElementById('phone').innerHTML='<span class=boxuserreg>请输入手机</span>';
}else{
	var phone = /^1([38]\d|4[57]|5[0-35-9]|7[06-8]|8[89])\d{8}$/;
	if(!phone.test(document.ly.tel.value)){
	window.document.getElementById('phone').innerHTML="<span class=boxuserreg>请输入正确的手机号</span>";
	}else{
	window.document.getElementById('phone').innerHTML='<img src=/static/home/images/dui2.png>';
	window.document.ly.tel.style.border = '1px solid #dddddd';
	}
} 
} 
function check_somane(){
if (document.ly.name.value ==""){	
	document.getElementById('ts_name').innerHTML='<span class=boxuserreg>请输入姓名</span>';
}else{
    var re=/^[\u4e00-\u9fa5]{2,10}$/; //只输入汉字的正则
    if(document.ly.name.value.search(re)==-1){
	window.document.getElementById('ts_name').innerHTML='<span class=boxuserreg>联系人只能为汉字，字符介于2到10个。</span>';
	}else{
	window.document.getElementById('ts_name').innerHTML='<img src=/static/home/images/dui2.png>';
	window.document.ly.name.style.border = '1px solid #dddddd';
	}
}
}

function check_email(){
var email=document.ly.email.value;
email=email.replace(/[ ]/g,"");//去空格用 
if (email ==""){
window.document.getElementById('ts_email').innerHTML='';//当不输入内容时清空提示
}else{
var reg = /^[-._A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/; 
	if(!reg.test(email)){
	window.document.getElementById('ts_email').innerHTML='<span class=boxuserreg>E_mail格式不正确</span>';
	}else{
	window.document.getElementById('ts_email').innerHTML='<img src=/static/home/images/dui2.png>';
	window.document.ly.email.style.border = '1px solid #dddddd';
	}
}
}

function check_yzm(){
if (document.ly.yzm.value !=""){
   var re=/^([0-9]+)$/; //只输入数字
    	if(document.ly.yzm.value.search(re)==-1){
		window.document.getElementById('ts_yzm').innerHTML='<span class=boxuserreg>验证码答案只能为数字</span>';
		}else{
		window.document.getElementById('ts_yzm').innerHTML='';
		window.document.ly.yzm.style.border = '1px solid #dddddd';
		}
}
}

function showinfo(names,n){
	var chList=document.getElementsByName("ch"+names);
	var TextArea=document.getElementById("contents");
	if(chList[n-1].checked){ //数组从0开始
		var temp= TextArea.value; 
		TextArea.value = temp.replace(document.getElementById(names+n).innerHTML,"");
		TextArea.value+= document.getElementById(names+n).innerHTML;
	}else{
		var temp= TextArea.value; 
		TextArea.value = temp.replace(document.getElementById(names+n).innerHTML,"");
	}
}

function CheckAllProvince(form){
  for (var i=0;i<40;i++)//表单内有其它原素
    {
    var e = form.elements[i];
    if (e.Name != "chkAll" )
       e.checked = form.chkAll.checked;
    }
}
function resizeimg(maxWidth,maxHeight,objImg){
var img = new Image();
img.src = objImg.src;
var hRatio;
var wRatio;
var Ratio = 1;
var w = img.width;
var h = img.height;
wRatio = maxWidth / w;
hRatio = maxHeight / h;
if (maxWidth ==0 && maxHeight==0){
Ratio = 1;
}else if (maxWidth==0){//
if (hRatio<1) Ratio = hRatio;
}else if (maxHeight==0){
if (wRatio<1) Ratio = wRatio;
}else if (wRatio<1 || hRatio<1){
Ratio = (wRatio<=hRatio?wRatio:hRatio);
}
if (Ratio<1){
w = w * Ratio;
h = h * Ratio;
}
objImg.height = h;
objImg.width = w;
}	 