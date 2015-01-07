<!DOCTYPE html>
<html lang="zh-CN" dir="ltr" class="client-nojs">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="./js/ajax.js"></script>
<meta name="viewport" content="width=1000 height=700">
<link rel="stylesheet" href="./css/myweb.css" type="text/css" />
<link rel="shortcut icon" href="img/1.png" type="image/x-icon" />
<script type="text/javascript"> 
    var int = self.setInterval("myrefresh()", 2000);
    function myrefresh() 
{ 
    var idx = document.getElementById("picShowing").src;
	var patt1=/\d/g;
	var find = idx.match(patt1);
	var picIndex = find[find.length - 1];
	picIndex = parseFloat(picIndex);
	picIndex = picIndex%3 + 1;
	document.getElementById("picShowing").src= "img/showPic/" + picIndex +".jpg";
} 

 $(document).ready(function(){
    $(".showLeft").click(function(){
      var idx = document.getElementById("picShowing").src;
	var patt1=/\d/g;
	var find = idx.match(patt1);
	var picIndex = find[find.length - 1];
	picIndex = parseInt(picIndex)-1;
	picIndex = picIndex%3;
	if(picIndex === 0)
	{
            picIndex = 3;
			};
	document.getElementById("picShowing").src= "img/showPic/" + picIndex +".jpg";
    });
    $(".showRight").click(function(){
        var idx = document.getElementById("picShowing").src;
	var patt1=/\d/g;
	var find = idx.match(patt1);
	var picIndex = find[find.length - 1];
	picIndex = parseInt(picIndex);
	picIndex = picIndex%3 + 1;
	document.getElementById("picShowing").src= "img/showPic/" + picIndex +".jpg";       
    });
    $(".showPic").mouseleave(function(){
        $(".showRight").hide(); 
        $(".showLeft").hide(); 
        int = self.setInterval("myrefresh()", 2000);
    });
        $(".showPic").mouseenter(function(){
        $(".showRight").show(); 
        $(".showLeft").show(); 
        clearInterval(int);
    });
});
</script>

<head>
<title>EON首页</title> 
</head>


<body>
<div class="showPic">
    <div class="showLeft" style="display: none;width: 36px; height: 37px">
    </div>
    <div class="showRight" style="display: none;width: 36px; height: 37px">
    </div>
    <img src="img/showPic/1.jpg" id="picShowing"/>
</div>

<img class="imgLogo" src="img/1.png" width="175" height="176"  alt=""/>
<span id="con" class="conInfo"></span>
<div class="Login"> 
<table align="center">
    <tr><td>用户名</td><td><input type = 'text' name = "userName" id= "user" class="tdLogin"/></td></tr>
    <tr><td> 密&nbsp;&nbsp;码</td><td><input type = 'password' name = "passWord"  id= "password" class="tdLogin"/></td></tr>
 </table>
<input type="submit" value = '登录' id="btn" class = "loginButtn"/>
<input type="submit" value = '注册'  id = "new" class="regButtn"/> 
</div>
<p style="position: absolute;top: 710px;left: 500px;font-family: arial;font-size: 12px;list-style-type:none;color: #666;">&copy;2014&nbsp;EON&nbsp中国科学技术大学朱祖勍团队</p>
</body>
<script src="./js/login.js"></script> 
</html>
<?php

//  这种方法是将原来注册的某个变量销毁
//session_unset();
//  这种方法是销毁整个 Session 文件
//session_destroy();
?>