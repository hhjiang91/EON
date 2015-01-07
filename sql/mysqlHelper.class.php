<?php
header("content-type:text/html; charset=utf-8");
class mysqlHelper{
public $conn;
public function  __construct(){
	  define("SAE_MYSQL_HOST_M",  "w.rdc.sae.sina.com.cn");
	  define("SAE_MYSQL_PORT", "3307");
	  define("SAE_MYSQL_USER", "15551193050");
	  define("SAE_MYSQL_PASS", "654321jiang");
	$this->conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if(!$this->conn)
	{
		die("连接失败".mysql_error());
		}
		mysql_query("set names utf8;");
	}
	
	//dml 执行查询 需要返回结
	public function  execute_dql($sql)
	{	mysql_select_db("app_optnetlab", $this->conn);
		$res = mysql_query($sql, $this->conn) or die(mysql_error());
		return $res;
		}
		
	// 果执行更新删除等语句dql
		public function  execute_dml($sql)
	{	mysql_select_db("app_optnetlab", $this->conn);
		$res1 = mysql_query($sql, $this->conn) or die(mysql_error());
		if(!$res1)
		{
			return 0;
			}else{
				if(mysql_affected_rows($this->conn)>0)
				{
					return 1;
					}
					else
					{
						return 2;
						}
				}
		}
		
		// 关闭连接
		public function  close_connect(){
			if(!empty($this->conn))
			{
				mysql_close($this->conn);
				}
			}
		
		
}