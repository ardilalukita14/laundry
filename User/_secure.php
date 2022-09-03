<?php
session_start(); 
if(!isset($_SESSION['USER_Portal'] )) {
	//include ("login.php");     
	//exit;
	header("location:logout.php");
}
?>