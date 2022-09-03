<?php 
// session_start();
    include('include/Connection.php');

    $username = $_POST['username'];
    $remember = $_POST['remember'];
    $password = MD5($_POST['password']);

    //QUERY
     $query="SELECT * FROM user_registration where User_Name='$username' AND Password='$password'";
     $info=$db->query($query);
     $row=$info->fetch_object();

      if($info->num_rows>0) {
            $valid = true;
            session_start();
            $_SESSION['USER_Portal'] = true;
            $_SESSION['User_id'] = $row->ID;
            $_SESSION['User_NAME'] = $row->User_Name;
            $_SESSION['Password'] = $row->Password;
            $_SESSION['Address'] = $row->Address;
            if($remember==1){
              setcookie('username', $row->User_Name, time() + (60 * 60), '/');
              setcookie('password', $password, time() + (60 * 60), '/');
            }else{
              setcookie('username', '', -1, '/');
              setcookie('password', '', -1, '/');
            }
            echo "success";
          }
          else
          {
            echo "failed";
          
   }
        
?>