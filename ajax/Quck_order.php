<?php 

include('../include/Connection.php');
include('../include/function.php');




$insert = "insert into user_registration(User_Name,Password,Address,Contact_No) 
             VALUES('".$_POST['name']."','".$_POST['phone']."','".$_POST['Address']."','".$_POST['phone']."')";
              $query1 = $db->query($insert);

              $insert1 = "insert into user_login(User_Name,Password) 
             VALUES('".$_POST['name']."','".$_POST['phone']."')";
             $query = $db->query($insert1);



$User_ID=$row->ID;

$USER_Name=$row->User_Name;
$Phone_No=$_POST['phone'];


$sel="INSERT INTO
    order_temp (User_ID,Services_Name,Services_Type,Laundry_Price,Dry_Price,Total_Item,Pick_Delivery_Status,Order_Status,Order_code)
VALUES ('".$User_ID."','".$_POST['Type']."','".$_POST['item']."','".$_POST['Laundry']."','". $_POST['Dry']."','".$_POST['Total_item']."','1','','')";

   $info=$db->query($sel);


if($info){

	$Order_Code=rand(10,1000000);
   $USER_ID=$User_ID;
    
   $sql="SELECT * From order_detail Where Pick_up_date='".$_POST['P_date']."' and Delivery_date='".$_POST['D_date']."' and Total_Item='".$_POST['Total_item']."' and Total_Price='".($_POST['Dry']+$_POST['Laundry'])."'";
    $sql1=$db->query($sql);   

    if($sql1->num_rows<=0) {
  
        $sel1="UPDATE order_temp SET Order_status='active' , Order_code='".$Order_Code."' , Pick_Delivery_Status='2' where   User_ID='".$USER_ID."' and Pick_Delivery_Status='1'";
         $info1=$db->query($sel1);

            $sel="INSERT INTO order_detail 
           (User_ID,Order_Code,User_Name,Total_Item,Total_Price,Pick_up_date,
           Delivery_date,Phone_No,Address,Pick_up_Status,Delivery_Status)
        VALUES ('".$USER_ID."','".$Order_Code."','".$USER_Name."','".$_POST['Total_item']."','".(($_POST['Dry']+$_POST['Laundry'])*$_POST['Total_item'])."','".$_POST['P_date']."','".$_POST['D_date']."','".$_POST['phone']."','".$_POST['Address']."','No','No')";

          $info=$db->query($sel);
      }
}


?>
