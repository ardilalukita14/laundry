<?php 
include('include/Connection.php');
extract($_POST);
$insert = "insert into contact_form(Name,Phone_No,Message)VALUES('".$Name."','".$Telp."', '".$Message."')";
$query1 = $db->query($insert);
if($query1)
echo "Berhasil";
else "Gagal";
?>