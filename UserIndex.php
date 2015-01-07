<!DOCTYPE html>
<html lang="zh-CN" dir="ltr" class="client-nojs">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="./js/ajax.js"></script>
<head>
<title>EON用户首页</title>
</head>
<script type="text/javascript"> 
$(document).ready(function(){
    $("#1").click(function(){
        $("#mainContent").show();
	$("#meeting").hide();
	$("#vote").hide();
	$("#confer").hide();
    })
     $("#2").click(function(){
        $("#mainContent").hide();
	$("#meeting").show();
	$("#vote").hide();
	$("#confer").hide();
    })
     $("#3").click(function(){
        $("#mainContent").hide();
	$("#meeting").hide();
	$("#vote").show();
	$("#confer").hide();
    })
     $("#4").click(function(){
        $("#mainContent").hide();
	$("#meeting").hide();
	$("#vote").hide();
	$("#confer").show();
    })
    
    //
    //
    //1 self information change
    var arrayStr = new Array();
    $(".meetingChose").hover(function(){
	$(this).children("div").fadeToggle('fast');
    })
    $(".modify").hover(function(){
	$(this).children("div").fadeToggle('fast');
    })
    $(".modify").click(function(){
        //choose the meeting time
        //1. show the reset or quantify
        $(".cancel1").show();
        $(".cer1").show();
        $(".modify").hide();
        //2 change all the td to txt
        var table = document.getElementById("selfInfo");//获取第一个表格 
        arrayStr.splice(0,10);
        for (var i=2;i<table.rows.length;i++)
        {
           var cols2 = table.rows[i].cells;
           arrayStr. push(cols2[1].innerHTML);
           var str = "<input type='text' value ='" +cols2[1].innerHTML + "'/>";
           cols2[1].innerHTML = str;
        }
    })
    // certify the self information
    $(".cer1").click(function(){
        // 1 ajax check all the infomation is right, or return error;
        //2 hide two submits,show the figure
        $(".cancel1").hide();
        $(".cer1").hide();
        $(".modify").show();
        //3. change the txt to td, show new value
        var table = document.getElementById("selfInfo");//获取第一个表格  
        for (var i=2;i<table.rows.length;i++)
        {
           var cols2 = table.rows[i].cells;  
           txtNode = cols2[1].childNodes;
           cols2[1].innerHTML = txtNode[0].value;
        }
    })
    $(".cancel1").click(function(){
        $(".cancel1").hide();
        $(".cer1").hide();
        $(".modify").show();
        //3. change the txt to td, show new value
        var table = document.getElementById("selfInfo");//获取第一个表格  
        for (var i=2;i<table.rows.length;i++)
        {
           var cols2 = table.rows[i].cells;  
           cols2[1].innerHTML = arrayStr[i-2];
        }
    })
    
    
    //2. 1-1meeting choose
    $(".meetingChose").click(function(){
        //choose the meeting time
        window.location.href = 'meetingChoose.php';
    })
})
</script>



<body>
    <img src="img/1.png" class="imgIdex"/>
    <div class="menu" style="width: 335px;height: 45px;left: 150px;position: absolute">
<table align="left" cellspacing="11">
  <tr >
    <td><a href="#" id="1">个人中心</a></td>
    <td><a href="#" id="2">1-1meeting</a></td>
    <td><a href="#" id="3">投票系统</a></td>
    <td><a href="#" id="4">组会安排</a></td>
  </tr>
</table>
</div>
<div id="mainContent" style="top:250px;left: 150px;position: absolute">
    <span style="font-size:20px;">个人信息</span><span style="position: absolute; left: 300px;  background-image: url(./img/hand.jpg); background-repeat: no-repeat; width: 50px;height: 50px;" class="modify"><div style="display:none;position: absolute;left: 50px;top: 0px; width: 40px">修改信息</div></span><br/>
    <table align="left"  width="300px" cellspacing="10" style="position: absolute; left: 50px;top: 60px" id="selfInfo">
<tr><td width="80px" align="right">姓名:</td><td id="name">薛娜娜</td></tr>
<tr><td align="right">性质:</td><td id="ID">普通会员</td></tr>
<tr><td align="right">工号:</td><td id="ID">SA13006921</td></tr>
<tr><td align="right">学位:</td><td id="stu">博士</td></tr>
<tr><td align="right">类型:</td><td id="kind">工程</td></tr>
<tr><td align="right">电话:</td><td id="tel">235435646</td></tr>
<tr><td align="right">邮箱:</td><td id="mail">免两年访问</td></tr>
<tr><td align="right">qq:</td><td id="qq">54+02748958</td></tr>
</table>
    <input type="reset" value="取消" style="position: absolute; top: 370px; left: 70px; width: 60px;font-size: 18px; display: none" class="cancel1"/> <input type="submit" value="确定" style="position: absolute; top: 370px; left: 170px; width: 60px;font-size: 18px;display: none" class="cer1"/> 
</div> 
    
<div id="meeting" style="display:none; top:250px;left: 150px;position: absolute">
 <span style="font-size:20px;">1-1 meeting</span><span style="position: absolute; left: 300px;  background-image: url(./img/hand.jpg); background-repeat: no-repeat; width: 50px;height: 50px;" class="meetingChose"><div style="display:none;position: absolute;left: 50px;top: 0px; width: 40px">选择时间</div></span><br/>
<table align="left"  width="300px" cellspacing="10" style="position: absolute; left: 50px;top: 65px" id="meetingTime">
<tr><td width="110px" align="right">你的预约:</td><td id="selfMeeting">11.1 10:30-11.00</td></tr>
<tr><td align="right">你前一位:</td><td id="preMeet">陆平</td></tr>
<tr><td align="right">你后一位:</td><td id="nextMeet">姚菁菁</td></tr>
</table>
</div>

<div id="vote" style="display:none;top:250px;left: 150px;position: absolute">
<span style="font-size:20px">投票系统</span><br/>
</div>

<div id="confer" style="display:none;top:250px;left: 150px;position: absolute">
<span style="font-size:20px">组会安排</span><br/>
</div>
    
    
<div style="position: absolute;left: 600px;top: 80px;width: 70px;height: 50px; background-image: url(./img/anoucement.jpg); background-repeat: no-repeat; ">   
</div>  
<div id="infoDiv" style="OVERFLOW: hidden; WIDTH: 400px; HEIGHT: 40px;position: absolute;left: 680px;top: 85px">
    <table  border="0" cellpadding="0" cellspacing="0">
    <tr> <td id="table1">
            <table width="100%" height="99" border="0" cellpadding="0" cellspacing="0">
              <tr><td>周3老板出差</td></tr>
              <tr> <td>国庆节放假一周， 周日组会顺延</td></tr>
              <tr> <td>下周组会由杨露露， 马守江作报告</td> </tr>
              <tr><td>本周六聚餐</td></tr>
        </table></td></tr>
    <tr>
      <td id="table2"></td>
    </tr>
    </table>
</div>
    
<span style="position: absolute;left: 980px;top: 180px;font-size: 35px">新闻通告</span>
<div style="position: absolute;left: 900px;top: 220px;width: 70px;height: 50px; background-image: url(./img/newimg.jpg); background-repeat: no-repeat; "> </div> 
 <div id="newDiv" style="OVERFLOW: hidden; WIDTH: 400px; HEIGHT: 200px;position: absolute;left: 950px;top: 250px">
  <table  table border="0" cellpadding="0" cellspacing="0">
       <tr><td id="table3"><table width="100%" height="99" border="0" cellpadding="0" cellspacing="10">
              <tr><td>1.恭喜我组某某的JLT被接收</td></tr>
              <tr> <td>2.我组某某某在学期末荣获国家奖学金， 再次向她祝贺</td></tr>
              <tr> <td>3.我组毕业生都有一个好的归宿， 某某某去了阿里， 陈某某去了华为， 李某某去了腾讯，再次预祝我们组发展越来越好</td> </tr>
              <tr> <td>31.我组毕业生都有一个好的归宿， 某某某去了阿里， 陈某某去了华为， 李某某去了腾讯，再次预祝我们组发展越来越好</td> </tr>
              <tr><td>4.某国家级项目即将结项， 望相关人员做好准备</td></tr>
              <tr><td>5.某级项目即将结项， 望相关人员做好准备</td></tr> </table></td>
        </tr>
        <tr>
          <td id="table4"></td>
        </tr>  
  </div>
  <p style="position: absolute;top: 710px;left: 500px;font-family: arial;font-size: 12px;list-style-type:none;color: #666;">&copy;2014&nbsp;EON&nbsp中国科学技术大学朱祖勍团队</p>
  

</body>

<script type="text/javascript">
    // <![CDATA[
    var speed=100
    var MyMarh=setInterval(Marqueeh,speed)
    table2.innerHTML=table1.innerHTML
    //原理是不断的向demoh2中填入demoh1中的内容，然后将已经看不见的清除
    //用一个两行一列的表格，上一列再放一个装填有内容的表格，定义为demoh1，下一列是空的TD，定义为demoh2
    //SPEED是用来控制速度的。
    infoDiv.onmouseover=function(){ clearInterval(MyMarh) }
    infoDiv.onmouseout=function(){ MyMarh=setInterval(Marqueeh,speed) }
    function Marqueeh(){
        if(table2.offsetHeight-infoDiv.scrollTop<=0)
            infoDiv.scrollTop-=table1.offsetHeight
        else{
            infoDiv.scrollTop++
        }
    }
     var MyMarh1=setInterval(Marqueeh1,speed)
    table4.innerHTML=table3.innerHTML
    //原理是不断的向demoh2中填入demoh1中的内容，然后将已经看不见的清除
    //用一个两行一列的表格，上一列再放一个装填有内容的表格，定义为demoh1，下一列是空的TD，定义为demoh2
    //SPEED是用来控制速度的。
    newDiv.onmouseover=function(){ clearInterval(MyMarh1) }
    newDiv.onmouseout=function(){ MyMarh1=setInterval(Marqueeh1,speed) }
    function Marqueeh1(){
        if(table4.offsetHeight-newDiv.scrollTop<=0)
            newDiv.scrollTop-=table3.offsetHeight
        else{
            newDiv.scrollTop++
        }
    }
</script>
</html>

<?php 
   include_once 'testUser.class.php';
 ?>