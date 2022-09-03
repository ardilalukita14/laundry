<?php
 $title='Confirmation Order';
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
        <li class="breadcrumb-item active"> Order Status</li>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cutlery"></i> Order Status </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
             <div class="form-group col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Order </th>
                          <th>Nama</th>
                          <th>Total (jumlah)</th>
                          <th>Harga</th>
                          <th>Tanggal Ambil</th>
                          <th>Tanggal Antar</th>

                          <!-- <th>Status</th> -->
                          <th>Detail</th>
                          <th>Status</th>
                        </tr>
                      </thead>
          <tbody>
                      
          <?php   $Get_Order_dtail=get_order_status_Count(); 
                $count=0;
             if($Get_Order_dtail->num_rows>0)
                {
                  
                 while($row=$Get_Order_dtail->fetch_object())
                    { $count++;
                    $SID=$row->User_ID;
                    $QR_code=$row->Order_Code;
                    $status = $row->Delivery_status
                   
                ?>
             <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo$row->Order_Code?></td>
                  <td><?php echo $row->User_Name; ?></td>
                  <td><?php echo $row->Total_Item; ?></td>  
                  <td><?php echo $row->Total_Price; ?></td>
                  <td><?php echo $row->Pick_up_date; ?></td>
                  <td><?php echo $row->Delivery_date; ?></td> 
                  <td><a data-toggle="modal" data-target="#exampleModalUser_Order<?php echo $count;?>" class=" btn btn-primary">View</a>
                <?php 
                 include('../admin_portal/view_User_Order_detail.php');?>
                 </td>
                  <td>
                   <?php 
                   if($status=='Deliver'){ ?>
                       <img src="images/deliver.png" width="100px"> 
                     <?php }else{
                       //echo $row->Delivery_status;
                      echo 'Waiting';
                     } ?>
                </td>
                </tr>
                
             <?php  }
                }?>   
                      </tbody>
                    </table>
                </div>  
              </div> 
        </div>
       </form> 
        </div>
    </div>
<br>
     <?php include('footer.php');?>
  </div>
</body>
</html>
