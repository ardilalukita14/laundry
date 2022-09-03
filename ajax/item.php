<?php 

include('../include/Connection.php');
include('../include/function.php');

if(isset($_POST['Type']))
  {   
      $Get_food_item=Get_item($_POST['Type']); 
             if($Get_food_item->num_rows>0)
                {
                  $count='0';?>
                  <div class="col-md-6">
                      <div class="form-group">
                      <select class="form-control" id="iteam" onchange="gcuf()" required="">
                           <option class="hidden"  selected disabled>Select Item</option>

                 <?php while($row=$Get_food_item->fetch_object())
                    { ?>
                     <option value="<?php echo $row->Services_Name ?>"><?php echo $row->Services_Name ?></option>
                
             <?php  }; ?>

                  </select>
                    </div>
                     </div>

                <?php }
              };?>

<div id="item_detail"></div>

<script >  
function gcuf(){
  var item= $('#iteam').val();
  var Type= '<?php echo $_POST['Type'];?>';
            $.ajax({
              type:'POST',
              url: 'ajax/item_detail.php',
              data:'item='+item+'&Type='+Type,
              success:function(html)
              {
                $('#item_detail').html(html);
              }
            }); 
}
  
  
</script> 
              