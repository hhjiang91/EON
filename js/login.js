var btn = document.getElementById('btn');  
var reg = document.getElementById('new');  
var user = document.getElementById('user');  
var password = document.getElementById('password');  
btn.onclick = function(){  
    var isValidate=false;  
    if (!user.value.match(/^\S{2,20}$/)) {  
        user.className = 'userRed';  
        user.focus();  
        return;  
    } else {
        user.className = 'text';  
        isValidate=true;  
    }  
    if (password.value.length<6 || password.value.length>20) {  
        password.className = 'userRed';  
        password.focus();  
        return;  
    } else {  
        password.className = 'text';  
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
                login = parseInt(xmlhttp.responseText.valueOf());
               // alert(login);
                 if(login === 2){
                    // alert("hello");
                        //administrator
                        con.innerHTML = '<font color="green">登录成功，跳转中...</font>';
                         setTimeout(jump1,3000);
                         function jump1(){
                             window.location.href = 'AdminIndex.php';
                            }
                        // 登录成功后指定跳转页面 
                   }else if(login === 1){
                        //administrator
                        con.innerHTML = '<font color="green">登录成功，跳转中...</font>'; 
                        setTimeout(jump2,3000);
                         function jump2(){
                             window.location.href = 'UserIndex.php';
                            }
                      // 登录成功后指定跳转页面 
                   }else{  
                          con.innerHTML = '<font color="red">帐号或密码错误！</font>';  
                    };
                }
         };       
       
            //3.设置和服务器交互的对应参数，这边我们使用的是get,使用post后面会有所改动
            var send = eval("'user='+document.getElementById('user').value+'&password='+document.getElementById('password').value");
            xmlhttp.open("POST","login.php");
            //4.设置向服务器端发送的数据，启动和服务器端的交互
            //使用GET就不需要填写了，直接写成null
             xmlhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
             xmlhttp.send(send);
        }
};
reg.onclick = function(){  
    window.location.href='reg.php';
};
