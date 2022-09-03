<?php 
error_reporting(0);
$db=new MYSQLi("localhost","root","","laundry");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>