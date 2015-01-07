<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="admin.css" type="text/css" />
<script src="admin.js" language="javascript" type="text/javascript" charset="utf-8"></script>
<title>管理员首页</title>
</head>
<body>
<img src="img/1.png" class="imgIdex"/>
<div class="menu">
<table align="left" cellspacing="11">
  <tr >
    <td><a href="#" id="1" onclick="changeDiv(this)">个人中心</a></td>
    <td><a href="#" id="2" onclick="changeDiv(this)">成员管理</a></td>
    <td><a href="#" id="3" onclick="changeDiv(this)">1-1meeting</a></td>
    <td><a href="#" id="4" onclick="changeDiv(this)">投票系统</a></td>
  </tr>
</table>
</div>

<div id="mainContent" style="display:block">
<span style=" font-size:20px">个人信息</span><br/>
<table align="left"  width="300px">
<tr><td width="80px" align="right">姓名:</td><td id="name">薛娜娜</td></tr>
<tr><td align="right">性质:</td><td id="ID">管理员</td></tr>
<tr><td align="right">工号:</td><td id="ID">SA13006921</td></tr>
<tr><td align="right">类型:</td><td id="kind">工程</td></tr>
<tr><td align="right">邮箱:</td><td id="mail">免两年访问</td></tr>
<tr><td align="right">qq:</td><td id="qq">54+02748958</td></tr>
</table>
</div>

<div id="menberShow" style="display:none; width:520px">
<span style="font-size:20px">添加成员</span><br/>
请输入新添成员的姓名， 多位请用空格隔开.<br/>
<form method="post" action="addNew.php">
<input type="text" name="newBody" maxlength="12">
<input type="submit" value="提交">
</form>
<span id="showErr"></span>
<br/>
<span style="font-size:20px">目前成员</span><br>
目前， 博士12人， 研究生23人， 准研究生23人， 大学生23人。<br/>
博士：<br/>
研究生：<br/>
准研究生：<br/>
大学生：<br/><br/>
<span style="font-size:20px">往届成员</span><br/>
毕业博士10人， 研究生10人。<br/>
博士：~~~~<br/>
研究生：~~~<br/><br/>
<span style="font-size:20px">检索往届成员</span><br/>
请输入自2014年起的年份
<form method="post" action="findBody.php">
<input type="text" name="year">
<input type="submit" value="提交">
<span id = "showResult"> </span>
</div>

<div id="meeting" style="display:none; width:520px">
<span style="font-size:20px">1-1 meeting</span><br/>
</div>

<div id="vote" style="display:none; width:520px">
<span style="font-size:20px">投票系统</span><br/>
</div>

</body>
</html>

<?php
require_once 'testUser.class.php';
?>