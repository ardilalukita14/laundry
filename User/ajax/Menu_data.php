 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis</th>
                  <th>Harga Laundry</th>
				  <th>Harga Delivery</th>
                  <th>Order</th>
                </tr>
              </thead>
              
              <tbody>
 <?php 
include('../include/db.php');
include('../include/function.php');
if(isset($_POST['Menu_Type']))
  {   
      $Get_food_item=Get_item($_POST['Menu_Type']); 
             if($Get_food_item->num_rows>0)
                {
                  $count='0';
                 while($row=$Get_food_item->fetch_object())
                    { $count++;?>
                
             <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo $row->Services_Name; ?></td>
                  <td><?php echo $row->Laundry_Price; ?></td>
				  <td><?php echo $row->Delivery_Price; ?></td>
                 
                  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $row->ID; ?>">Order</button>
                     <?php include('..\Order_model.php');?>
                   </td>
                </tr>

             <?php  }
                }
              };
 ?>

 </tbody>
            </table>
          </div>

             