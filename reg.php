<!DOCTYPE html>
<html lang="zh-CN" dir="ltr" class="client-nojs">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1000 height=700">
<link rel="shortcut icon" href="img/1.png" type="image/x-icon" />
<script type="text/javascript" src="./js/jquery-2.1.1.js"></script>
<link rel="stylesheet" href="./css/reg.css" type="text/css" />
<head>
<title>EON会员注册</title> 
</head>

<body>
<img src="img/1.png"/>
<span style="position:absolute; top:140px; left:160px; font-size:30px">成员注册(请填写以下信息)</span>
<div style="position:absolute; top:180px; left: 220px; height:300px;">
<table align="left" style="margin-bottom:5px; border:thin #666">
    <tr><td width="50px" align="center">姓名</td><td><input type="text" id="usrName" onkeyup="value=value.replace(/[^\u4E00-\u9FA5|A-Za-z0-9]/g,'')"></td><td id="nameIfo" >汉字，英文，数字组合</td></tr>
    <tr><td width="50px" align="center">密码</td><td><input type="password" maxlength="20" id="usrKey" onKeyUp="value=value.replace(/[^\d|a-z|A-Z]/g,'')"></td><td id="keyInfo">6~20位字母+数字</td></tr>
    <tr><td align="center">工号</td><td><input type="text" id="usrId" onKeyUp="value=value.replace(/[^SA|\d]/g,'')"></td><td id="workNoInfo">大写字母+数字</td></tr>
    <tr><td align="center">类型</td><td><input type="text" id="kind"></td><td id="kindInfo">工学 or 工程</td></tr>
    <tr><td align="center">邮箱</td><td><input type="text" id="email" ></td><td id="emailInfo">优先使用科大邮箱</td></tr>
    <tr><td align="center">qq</td><td><input type="text" id="qq" onKeyUp="value=value.replace(/[^\d]/g,'')"></td><td id="aaInfo" >请加老板qq:2596154944</td></tr>
</table>
</div>
<input type="reset" value="重写" style="position:absolute; left:250px; top:380px; font-size:16px; width:70px" id="reset">
<input type="submit" value="提交" style="position:absolute; left:350px; top:380px;font-size:16px; width:70px" id="submit">
<div style="position:absolute; top:180px; left: 700px;display: none" id="showSuc">
    <img src="img/register.jpg">
    <br/>
    <span style="font-size: 40px; color:green">注册成功，跳转中...</span>
</div>
<span style="position:absolute; top:500px; left: 50px;font-size: 40px; color:#ff0000;display: none" id="showFail">
    不好意思， 数据库没你的信息，请联系一下管理员哈！
</span>
<p style="position: absolute;top: 710px;left: 500px;font-family: arial;font-size: 12px;list-style-type:none;color: #666;">&copy;2014&nbsp;EON&nbsp中国科学技术大学朱祖勍团队</p>

</body>
<script src="./js/reg.js"></script> 




