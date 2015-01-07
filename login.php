<?php
/*header("content-type:text/html; charset=utf-8");
require_once 'mysqlHelper.class.php';
$strTemp = "注册";
if(strcmp($_POST["submit1"], $strTemp)){
$name = $_POST["userName"];
$password = $_POST["passWord"];
// 0  是没输入完全， 1 用户不存在 2 用户密码错误
if(empty($name) || empty($password))
{
header("Location:index.php?errno=0");
exit();
}else{
	$sqlConn = new mysqlHelper();
	$sql = "select * from user where name = \"".$name."\"";
	$res= $sqlConn->execute_dql($sql);
	if($row=mysql_fetch_assoc($res)){
        //$password = (int)$password;
		if($row['key'] == md5($password))
		{   header("Location:main.php");
			return true;
			} else{
				
			header("Location:index.php?errno=2");
			exit();
			}
	}else{
		header("Location:index.php?errno=1");
		exit();
		}
		}
   mysql_free_result($res);
   $sqlConn->close_connect();
}else{
	header("Location:reg.php");
	exit();
	}*/

//$m = new Model();
$user = $_POST['user'];
$password = $_POST['password'];
//$count = $m->total('users', "user='". $user ."' and password='". sha1($password) ."'");
$count = 1;
session_start();
if ($count == 1) {
    //user
    $_SESSION['admin'] = $user;
    echo "1";
}else if ($count == 2){
    //adminitrator
 //  注册登陆成功的 admin 变量，并赋值 true
    $_SESSION['admin'] = $user;
    ob_start();
    echo "2";
}else{
    echo "0";
};
?>  