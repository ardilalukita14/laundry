<?php 
include('include/Connection.php');
    include('include/function.php');
    ?>
<style type="text/css">
	.register{
    background: -webkit-linear-gradient(left, #009688, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>

<!------ Include the above in your HEAD tag ---------->




<div class=" register" >
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Kirana Laundry</h3>
                        
                        <a href="Login.php"><input type="submit" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                                <h3 class="register-heading">Order Cepat</h3>
                                <div class="row register-form">
                                    <div class="col-md-12">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                        	<label>Nama</label><span id="name1"></span>
                                            <input type="any thing" class="form-control" required="" id="name" placeholder="First Name *" value="" />
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                        	<label>Nomor Telepon</label><span id="phone1"></span>
                                            <input type="number" class="form-control"  maxlength="12" minlength="12" required="" id="phone" placeholder="Last Name *" value="" pattern="[0-9]{12}" />
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                        	<label> Tanggal Jemput</label><span id="P_date1"></span>
                                            <input type="date" class="form-control" required="" id="P_date" placeholder="Last Name *" value="" />
                                        </div>
                                      </div>

                                      <div class="col-md-6">
                                        <div class="form-group">
                                        	<label>Tanggal Antar</label><span id="D_date1"></span>
                                            <input type="date" class="form-control" required="" id="D_date" placeholder="Last Name *" value="" />
                                        </div>
                                      </div>
                                      <div class="col-md-12">  
                                        <div class="form-group">
                                        	<label>Alamat</label><span id="Address1"></span>
                                        	<textarea class="form-control" id="Address" required=""></textarea>
                                            <!-- <input type="Address" class="form-control" placeholder="Password *" value="" /> -->
                                        </div>
                                       </div>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                            <select class="form-control" id="Type" onchange="Type1()" required="">
                                                <option class="hidden"  selected >Tipe Laundry</option>
                                               <?php $Show1=Serv_Type();
									                $count='0';
									                 while ($row=$Show1->fetch_object()) {
									                   $count++;
									                ?>
									              <option value="<?php echo $row->Services_Name ?>"><?php echo $row->Services_Name ?></option>
									                  <?php };?>
                    
                                            </select>
                                            <script >  
												function Type1(){
													var Type= $('#Type').val();
												            $.ajax({
												              type:'POST',
												              url: 'ajax/item.php',
												              data:'Type='+Type,
												              success:function(html)
												              {
												                $('#result').html(html);
												              }
												            }); 
												}

                                            </script> 
                                        </div>
                                       </div>

                                      

                                       <div id="result"></div>

                                        
                                    </div>
                                 
                               </div>
                           
                        </div>
                    </div>
                </div>

            </div>

            <div id="css"></div>

<script >  


 // loadpage();
 //      function loadpage() 
 //      {
 //        var Type='Men,s';
 //        alert(Type);
 //        $.ajax({type:'POST',url: "ajax/item.php?Type=".concat(Type), success: function(result){
 //         $("#result").html(result);
 //         alert('gcuf');
 //            }});
        
 //      }

function submit(){
  var name= $('#name').val();
  var phone= $('#phone').val();
  var P_date= $('#P_date').val();
  var D_date= $('#D_date').val();
  var Address= $('#Address').val();
  var Type= $('#Type').val();
  var item= $('#iteam').val();
    var Total_item= $('#Total_item').val();
    

  var Dry= $("#Dry:checked").val();
  var Laundry= $("#Laundry:checked").val();

  if(name==''){
    document.getElementById("name1").innerHTML = " (Please enter name)";
     exit();
  }
  if(phone==''){
    document.getElementById("phone1").innerHTML = " (Please enter phone)";
     exit();
  }
  if(P_date==''){
    document.getElementById("P_date1").innerHTML = " (Please enter Puck Up Date)";
     exit();
  }
  if(D_date==''){
    document.getElementById("D_date1").innerHTML = " (Please enter Delivery Date)";
     exit();
  }
  if(Address==''){
    document.getElementById("Address1").innerHTML = " (Please enter Address)";
     exit();
  }
  if(Total_item==''){
    document.getElementById("Total_item1").innerHTML = " (Please enter Total item)";
    exit();
  }
    // alert(Laundry);
            $.ajax({
              type:'POST',
              url: 'ajax/Quck_order.php',
              data:'name='+name+'&phone='+phone+'&P_date='+P_date+'&D_date='+D_date+'&Address='+Address+'&item='+item+'&Type='+Type+'&Dry='+Dry+'&Laundry='+Laundry+'&Total_item='+Total_item,
              success:function(html)
              {
               $('#css').html(html);
               location.href=location.href;
              }
            }); 

  }

  
                                            

</script> 