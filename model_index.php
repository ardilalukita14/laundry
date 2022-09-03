<?php
error_reporting(0);
$db=new MYSQLi("localhost","root","","laundry");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;

function Insert_Data() 
{
  $conn_STUDENT = $GLOBALS['db'];
  $sql = "SELECT * from contact_form where  Name='".$Name."' and Message='".$Message."'";
// echo $sql;
  $info=$conn_STUDENT->query($sql);
          if($info->num_rows>0) 
          { 
            
          }else{
            $insert = "insert into contact_form(Name,Phone_No,Message)VALUES('".$Name."','".$Phone."', '".$Message."')";
            echo "<script>alert('Berhasil');</script>";
              $query1 = $conn_STUDENT->query($insert);
           }    
}

function Get_Detail_Service()
{
  
  $conn_STUDENT = $GLOBALS['db'];
  $sel="SELECT * from services_type";
  $info=$conn_STUDENT->query($sel);
  return $info;
}

function fetchObject()
{
  $conn_STUDENT = $GLOBALS['db'];
  $sel="SELECT * from services_type";
  $info=$conn_STUDENT->query($sel);
  while ($obj = $info -> fetch_object()){

  }
  return $obj;
}

function Get_Menu_Contact()
{
  $conn_STUDENT = $GLOBALS['db'];
  $sel="SELECT * from services_uploade WHERE Services_Type='".$obj->Services_Name."' ";
  $info_sql=$conn_STUDENT->query($sel);
  return $info_sql;
}
  
  
