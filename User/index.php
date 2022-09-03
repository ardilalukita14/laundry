<?php

 $title='Dashboard';
   include('header.php');
   include('_secure.php');
   include('include/db.php');
    include('include/function.php');?>

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
        <li class="breadcrumb-item active">My Dashboard </li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-archive"></i>
              </div>
              <div class="mr-5">
<?php $GET_satus=get_order_status_Count(); 
echo  $GET_satus->num_rows;?>

             Order Detail!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="user_order_detail.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-american-sign-language-interpreting"></i>
              </div>
              <div class="mr-5">
<?php $GET_menu=Get_Menu_count(); 
echo  $GET_menu->num_rows;?>
               Total servies!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="menu_list.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
     
      
      <!-- Example DataTables Card-->
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('footer.php');?>
  </div>
</body>
</html>