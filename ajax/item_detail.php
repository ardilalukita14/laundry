<?php 

include('../include/Connection.php');
include('../include/function.php');

if(isset($_POST['Type']) && isset($_POST['item']))
  {   
      $Get_item=Get_item_detail($_POST['Type'],$_POST['item']); 
             if($Get_item->num_rows>0)
                { $row=$Get_item->fetch_object();
                  ?>
                  <div class="col-md-6">
                      <div class="form-group">
                 <?php 
                  if($row->Dry_Price>0){?> 
                       <label>Dry Clean </label>
                      <input type="radio" id="Dry" name="Dry"  value="<?php echo $row->Dry_Price;?>" />
                  <?php };?>

                   <?php 
                  if($row->Laundry_Price>0){?> 
                       <label>Laundry</label>
                      <input type="radio" id="Laundry" name="Laundry" value="<?php echo $row->Laundry_Price;?>" />
                  <?php };?>


                      
                    </div>
                     </div>
                   
                <?php }
              };?>


<div class="col-md-6">
  <div class="form-group">
   <select class="form-control" id="Total_item" ><span id="Total_item1"></span>
      <option class="hidden"  selected >Total Item</option>
        <?php for($a=1; $a<100;$a++){                                       
        ?>
        <option value="<?php echo $a ?>"><?php echo $a;?></option>
          <?php };?>
    </select>
  </div>
</div>


<div class="col-md-6">
  <div class="form-group">
   <input type="submit" class="btnRegister"  value="order" onclick="submit();" />
  </div>
</div>






