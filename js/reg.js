var usrName = document.getElementById('usrName');  
var usrKey = document.getElementById('usrKey');  
var usrId = document.getElementById('usrId');  
var usrKind = document.getElementById('kind');  
var emailAddr = document.getElementById('email');
var qq = document.getElementById('qq');

var btn = document.getElementById('submit');
var reset = document.getElementById('reset');


emailAddr.onblur = function(){
    strMail = emailAddr.value;
    if(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(strMail))
    {   
        document.getElementById("emailInfo").style.border="2px solid #FFFFFF";
        document.getElementById("emailInfo").innerHTML = "优先使用科大邮箱";
    }else{
        document.getElementById("emailInfo").innerHTML = "请正确输入邮箱";
        document.getElementById("emailInfo").style.border="2px solid #FF0000";
    }
};

usrKind.onblur = function(){
    kindT = usrKind.value;
    if(!(kindT === "工程" || kindT === "工学")){
        document.getElementById("kindInfo").innerHTML = "请正确类型:工学or工程";
        document.getElementById("kindInfo").style.border="2px solid #FF0000";
    }else{
        document.getElementById("kindInfo").innerHTML = "工学 or 工程";
        document.getElementById("kindInfo").style.border="2px solid #FFFFFF";
    }
};

btn.onclick = function(){  
        var isValidate=false;  
    if (usrName.value.length<2 || usrName.value.length>20) {  
        usrName.className = 'userRed';  
        usrName.focus();  
        return;  
    } else {
        usrName.className = 'text';  
        isValidate=true;  
    }  
    if (usrKey.value.length<6 || usrKey.value.length>20) {  
        usrKey.className = 'userRed';  
        usrKey.focus();  
        return;  
    } else {  
        usrKey.className = 'text';  
        isValidate=true;  
    } 
     if (usrId.value.length!=10) {  
        usrId.className = 'userRed';  
        usrId.focus();  
        return;  
    } else {  
        usrId.className = 'text';  
        isValidate=true;  
    } 
     if (!usrKind.value) {  
        usrKind.className = 'userRed';  
        usrKind.focus();  
        return;  
    } else {  
        usrKind.className = 'text';  
        isValidate=true;  
    } 
     if(!emailAddr.value) {  
        emailAddr.className = 'userRed';  
        emailAddr.focus();  
        return;  
    } else {  
        emailAddr.className = 'text';  
        isValidate=true;  
    } 
     if (qq.value.length<6 || usrKey.value.length>15) {  
        qq.className = 'userRed';  
        qq.focus();  
        return;  
    } else {  
        qq.className = 'text';  
        isValidate=true;  
    } 
    
    if (isValidate) {  
         var xmlhttp;
            //1.创建XMLHttpRequest对象
        if(window.XMLHttpRequest){
           //IE7,FireFox等 alert("IE7");
            xmlhttp=new XMLHttpRequest();
            if(xmlhttp.overideMimeType){
                xmlhttp.overrideMimeType("text/xml");
            }
        }else if(window.ActiveXObject){
            //IE6,IE5等 alert("IE5");
            var activexName=["MSXML2.XMLHTTP.6.0","MSXML2.XMLHTTP.5.0",
                       "MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0",
                       "MSXML2.XMLHTTP","Microsoft.XMLHTTP"];
            for(var i=0;i<activexName.length;i++){
                try {
                     xmlhttp=new ActiveObject(activexName[i]);
                     break;
		} catch (e) {
			}
            }
         }
            
         if(xmlhttp==undefined||xmlhttp==null){
            alert("当前浏览器不支持XMLHttpRequest对象，请更换对象！");
            return;
         }
       
        xmlhttp.onreadystatechange = function callback(){
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
             {
                register = parseInt(xmlhttp.responseText.valueOf());
                 if(register){ 
                     $("#showSuc").show(); 
                     setTimeout(jump,5000);
                     function jump(){
                         window.location.href = 'index.php';
                     }
                   }else{  
                       $("#showFail").show();
                    };
                }
         };       
       
            var send = eval("'usrName='+usrName.value+'&usrKey='+usrKey.value+'&usrKey='+usrKey.value+'&usrId='+usrId.value+'&usrKind='+usrKind.value+'&emailAddr='+emailAddr.value+'&qq='+qq.value");
            xmlhttp.open("POST","addNewUser.php");
            //4.设置向服务器端发送的数据，启动和服务器端的交互
            //使用GET就不需要填写了，直接写成null
             xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
             xmlhttp.send(send);
         }
};
reset.onclick = function(){  
    usrName.value = "";
    usrKey.value = "";
    usrId.value = "";
    usrKind.value = "";
    emailAddr.value = "";
    qq.value = "";
};
