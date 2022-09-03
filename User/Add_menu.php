<?php
 $title='Dashboard';
   include('header.php');
   include('include/db.php');
    include('include/function.php');

if(isset($_POST['button']))
{
   $Menu_Type=$_POST['Menu_Type'];
  $Menu=$_POST['Menu'];
 $Menu_Price=$_POST['Menu_Price'];
  $img= pathinfo($_FILES['imageName']['name']);
  
    $Filename=substr(md5(time()),0,5);
     $menutimg= $Filename.".".$img["extension"];
     $imageUpload = move_uploaded_file($_FILES['imageName']['tmp_name'],"images/".$Filename.".".$img["extension"]);
     $insert = "insert into menu_upload(Menu_Type,Menu,Price,Pix_upload) 
     VALUES('".$Menu_Type."','".$Menu."','".$Menu_Price."','".$menutimg."')";
     $query = $db->query($insert);
  
}else{
            
}

    ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
 <?php  include('nav.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Menu</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cutlery"></i> Add Menu </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-lg-12">
            <label for="exampleInputEmail1">Enter Menu Pic</label>
            <input name="imageName" type="file"  class="form-control" required="">
          </div>
         <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Select Menu Type</label>
            <select class="form-control" name="Menu_Type"  id="Menu_Type" required="">
                <option  hidden="">Select Menu Type</option>ption>
                <option value="STUDENT">STUDENT</option>
                <option value="MAZEDAR">MAZEDAR</option>
                <option value="ECONOMY">ECONOMY</option>

            </select>
          </div>
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Enter Menu Name</label>
            <input type="text"  class="form-control" name="Menu" required="">
          </div>
          <div class="form-group col-lg-4">
            <label for="exampleInputEmail1">Menu Price</label>
            <input type="text"  class="form-control" name="Menu_Price" required="">
          </div>
           <div class="form-group col-lg-12">
            <input type="submit"  class="form-control btn btn-primary" name="button">
          </div>
        </div>
       </form> 
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Kirana Laundry 2022</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pencet Tombol Logout jika anda ingin keluar.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
