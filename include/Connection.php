<?php 
// session_start();
if(isset($_SESSION['USER_Portal'])){
  header("location:User/index.php");
}
$db=new MYSQLi("localhost","root","","laundry");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>