<?php
require_once './sql/mysqlHelper.class.php';
$name = $_POST["usrName"];
$key = $_POST["usrKey"];
$key = md5($key);
$usrId = $_POST["usrId"];
$usrClass = $_POST["usrKind"];
$usrEml = $_POST["emailAddr"];
$usrQQ = $_POST["qq"];
/*
if(empty($name) || empty($usrClass) || empty($usrEml) || empty($usrId) || empty($usrQQ)){
	//some input is empty
		header("Location:reg.php?$err=0");
	}
	
$sqlConn = new mysqlHelper();
$sql0 = "select * from userInfo where name = \"".$name."\"";
$res= $sqlConn->execute_dql($sql0);
if($row=mysql_fetch_assoc($res)){
//UPDATE `app_optnetlab`.`userInfo` SET `usrID` = 'SA13006061' WHERE `userInfo`.`name` = '江慧慧';
	$sql = "UPDATE `app_optnetlab`.`userInfo` SET `list` = 'user',`usrID` = '".$usrId."' ,`stuClass` = '".$usrClass."' ,`email` = '".$usrEml."',`qqRec` = '".$usrQQ."' WHERE 'name' = '".$ame." ')";
	if($sqlConn->execute_dml("$sql") == 0)
	{
	  //the insert is failed
 	 header("Location:reg.php?$addusr=2");
	}
	$sql1 = "INSERT INTO `app_optnetlab`.`user` (`name` ,`key` ,`list` 		)VALUES ('".$name."','".$key."','user')";
	if($sqlConn->execute_dml("$sql") == 0)
	{
 	 //the insert is failed
	  header("Location:reg.php?$addusr=3");
	}
	header("index.php");
  }else{
	  //the body is not our member
  	header("Location:reg.php?$err=1");
  }*/
$count = TRUE;
if ($count) {
    setcookie('user', $name);
    echo "1";
}else{
    echo "0";
};
?>  

