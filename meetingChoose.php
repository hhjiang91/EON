
<html lang="zh-CN" dir="ltr" class="client-nojs">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="./js/ajax.js"></script>
<script type="text/javascript" src="./js/meeting.js"></script>
<meta name="viewport" content="width=1000 height=700">
<link rel="stylesheet" href="./css/meetCss.css" type="text/css" />
<link rel="shortcut icon" href="img/1.png" type="image/x-icon" />


 <body>
     
     <div class="cHead"><div class="userName"><?php echo $_SESSION['admin'];?>, 你好</div></div>   
     <div  style="position: absolute; height: 50px;width: 100%;top: 32px;background-color:#D2E0F1;border: 1px solid #99bbe8;">
         <span style="padding-left: 500px;text-align: center;margin-top: 10px;margin-bottom: 5px;font-size: 30px" id="monthShow"></span>
     </div>
     <table id="weekDay"><tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td></tr></table>
     <div class="tableDiv">
     <table class="chooseTable">
         <tr><td  id="showTd"><span class="timeSpan"><font size="2">09:30</font></span> </td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td  id="showTd"><span class="timeSpan"><font size="2">10:00</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td  id="showTd"><span class="timeSpan"><font size="2">10:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">11:00</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td colspan = "8" style="background-color: E8EEF7;position: relative;width: 1200px"><span class="timeSpan"><font size="2">11:30</font></span></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">14:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">15:00</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">15:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">16:00</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">16:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td colspan = "8" style="background-color: E8EEF7;position: relative;width: 1200px"><span class="timeSpan"><font size="2">17:00</font></span></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">19:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">20:00</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">20:30</font></span></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
         <tr><td id="showTd"><span class="timeSpan"><font size="2">21:00</font></span><td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
          <tr><td colspan = "8" style="background-color: E8EEF7;position: relative;width: 1200px"><span class="timeSpan"><font size="2">21:30</font></span></td></tr>
      	</table>
         </div>
<?php 
   include_once 'testUser.class.php';
 ?>
      <p style="position: absolute;top: 690px;left: 600px;font-family: arial;font-size: 12px;list-style-type:none;color: #666;">&copy;2014&nbsp;EON&nbsp中国科学技术大学朱祖勍团队</p>
  
 </body>

 
 
 
