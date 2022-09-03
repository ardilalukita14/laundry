<?php 
include('include/Connection.php');
error_reporting(0);
if(isset($_POST['login'])) 
{
  //print_r($_POST); 
  extract($_POST);
     $sel="SELECT * from user_registration where User_Name='".$username."' and Password=md5('".$psw."')";
    $info=$db->query($sel);
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
            setcookie('password', $psw, time() + (60 * 60), '/');
          }else{
            setcookie('username', '', -1, '/');
            setcookie('password', '', -1, '/');
          }
            header("location:User/index.php");
          } else {
            $valid = false; 
          }
        }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kirana Laundry Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <?php if(isset($valid) && $valid == false) { ?>
        <div class="alert alert-danger">
          Invalid Username or Password
                </div>
                <?php } ?>
          <!-- <form  role="form" method="post" action="">  -->
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email Anda</label>
              <input id="username" type="text" class="form-control" name="username" required="" value="<?=$_COOKIE['username']?>" placeholder="Masukkan Nama Lengkap Anda!">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-lock"></span> Password</label>
              <input id="password" type="password" class="form-control" name="psw"  required="" value="<?=$_COOKIE['password']?>" placeholder="Masukkan Nomor Telp Anda!">
            </div>
            <div class="checkbox">
              <label><input id="remember" type="checkbox" name="remember" value="1" checked>Remember me</label>
            </div>
              <button type="submit"  name="login" class="btn btn-login btn-block btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
          <!-- </form> -->
        </div>
        <div class="modal-footer">
          <p>Belum Terdaftar? <a href="Registration.php">Silahkan Mendaftar</a></p>
      <!--     <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
      
    </div>
  </div> 
</div>
 


<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    $('#myModal').modal({
    backdrop: 'static',   // This disable for click outside event
    keyboard: true        // This for keyboard event
})

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

    <script>
      $(document).ready(function() {

        $(".btn-login").click( function() {
        
          var User_NAME = $("#username").val();
          var Password = $("#password").val();
          var remember = $("#remember").val();

          if(username.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Username Kosong!'
            });

          } else if(password.length == "") {

            Swal.fire({
              type: 'warning',
              title: 'Oops...',
              text: 'Password Kosong !'
            });

          } else {

            $.ajax({

              url: "prosesLogin.php",
              type: "POST",
              data: {
                  "username": User_NAME,
                  "password": Password,
                  "remember": remember
              },

              success:function(response){

                if (response == "success") {

                  Swal.fire({
                    type: 'success',
                    title: 'Login Berhasil!',
                    text: 'Mohon ditunggu, Anda akan di arahkan dalam waktu 5 Detik',
                    timer: 5000,
                    showCancelButton: false,
                    showConfirmButton: false
                  })
                  .then (function() {
                    window.location.href = "User/index.php";
                  });

                } else {

                  Swal.fire({
                    type: 'error',
                    title: 'Login Gagal!',
                    text: 'Username atau Password Invalid!'
                  });

                }

                console.log(response);

              },

              error:function(response){

                  Swal.fire({
                    type: 'error',
                    title: 'Opps!',
                    text: 'Server mengalami error!'
                  });

                  console.log(response);

              }

            });

          }

        });

      });
    </script>

  </body>
</html>
