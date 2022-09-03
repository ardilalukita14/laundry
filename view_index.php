<?php include('include/Connection.php');

if(!isset($_COOKIE)){
  setcookie('bahasa', 'id', time() + (60 * 60), '/');
}
if(isset($_POST['Formsubmit'])){
   extract($_POST);

      $inserdata; 
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Kirana Laundry</title>

<link rel="icon" href="icon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Immerse a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
 <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />


<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">
<script>
  
  
   function bahasa(){
      var bahasa = document.getElementById("bahasa").value;
      if(bahasa=='id'){
        document.getElementById("Home").innerHTML="BERANDA";
        <?php setcookie('bahasa', 'id', time() + (60 * 60), '/'); ?>
      }else{
        document.getElementById("Home").innerHTML="HOME";
        <?php setcookie('bahasa', 'en', time() + (60 * 60), '/'); ?>
      }
      
    }
</script>
</head>
<style type="text/css">
  /* Social Icons */
#social_side_links {
  position: fixed;
  top: 340px;
  left: 0;
  padding: 0;
  list-style: none;
  z-index: 99;
}

#social_side_links li a {display: block; padding: 5px 5px 5px 5px; }

</style>
<body>
<!-- <ul id="social_side_links">
  <li><a style="background-color: #009688;width: 130px;height: auto;color: white;font-size: 29px"   data-toggle="modal" data-target="#myModal1">Order Sekarang</a></li>
 
</ul> -->


<!-- <div class="icon-bar">
  <a href="#" class="facebook" data-toggle="modal" data-target="#myModal1">Order Now<i class="fa fa-order"></i></a> 
</div> -->
<!-- banner -->
<div class="w3l_banner" >
  
<div class="w3_bandwn">
<div class="container">
	<div class="col-md-3 w3_l">
	<i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:kiranalaundry@gmail.com">kiranalaundry@gmail.com</a>
	</div>
	<div class="col-md-6 w3_c">
	<i class="fa fa-phone" aria-hidden="true"></i> 085234181838
	</div>
	<div class="col-md-3 w3_r">
	<a href="https://facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="https://twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</div>
    <div class="clearfix"></div>
</div>
</div>
<nav class="navbar navbar-default ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">Kirana Laundry</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll" id="Home">BERANDA</a></li>
        <li><a href="#about" class="page-scroll">TENTANG</a></li>
		<li><a href="#services" class="page-scroll">PELAYANAN</a></li>
		<li><a href="#gallery" class="page-scroll">GALERI</a></li>
		<li><a href="#testimonials" class="page-scroll">HARGA</a></li>
		<li><a href="#contact" class="page-scroll">KONTAK</a></li>
		<li><a href="Login.php" >LOGIN</a></li>
		<li><a href="Registration.php" >REGISTRASI</a></li>
    <li>Bahasa <select name="" id="bahasa" onchange="bahasa()"><option <?php if($_COOKIE['bahasa']=='id') echo 'Selected'; ?> value="id">Indonesia</option>
    <option <?php if($_COOKIE['bahasa']=='en') echo 'Selected'; ?> value="en">English</option></select></li>
		           
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="w3l_bandwn">
 <h2>Selamat datang di Kirana Laundry</h2>
 <div class="about-p text-center">
<span class="sub-title"></span>
<span class="fa fa-star" aria-hidden="true"></span>
<span class="sub-title"></span>
</div>
<h3>Jasa Cuci Terlengkap di Kota Malang</h3>
<div class="agile_dwng">
<a href="#" data-toggle="modal" data-target="#myModal">Selengkapnya </a>
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
         <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kirana Laundry</h4>
        </div>
        <div class="modal-body">
		<img src="images/foto.jpg"  class="img-responsive" alt="tfg">
          <p> Kirana Laundry, adalah Laundry terbersih, terlengkap & termurah yang didirikan 
		  di Kota Malang tahun 2014, Kami telah melayani banyak sekali jasa.
		  Pelayanan kami bukan hanya cepat namun rapi dalam pengemasan dan juga terjaminnya pakaian tidak akan tertukar atau hilang. Peralatan
    yang kami gunakan juga sudah maju, salah satunya adalah mesin cuci yang dimodifikasi ada pengeringnya dan juga setrika uap, jadi karyawan Kami
  tidak perlu takut lagi melakukan strika dalam jangka waktu yang lama.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
 </div>
</div>
<!-- /features -->
<div class="about" id="about">
	<div class="features" id="features">
		<div class="container">
	<h3>Tentang Kirana Laundry</h3>
			<div class="tittle_head_w3layouts">
				<h4>Kenapa memilih Kirana Laundry??</h4>
				
					<P>Layanan kami cepat, bersih, efisien, rapi, dan juga sangat andal. Layanan kami juga memastikan penyelesaian laundry tepat waktu.</p>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<!-- <div class="border1"> -->
				<div class="w3_banup">
					<div class="col-md-4 w3_ret">
					<div class="col-md-10 w3_txt">
							<h4>Rapi </h4>
							<p>Packing dengan teratur dan menyediakan wrapping gratis  </p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-crosshairs" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
            
					<div class="col-md-10 w3_txt">
							<h4>Wangi</h4>
							<p>Pewangi yang beda dari yang lain, wanginya tahan lama. Serta kami juga menggunakan pewangi asli seperti daia & molto ultra </p>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>

					<div class="col-md-10 w3_txt">
							<h4>Terjamin</h4>
							<p>Tidak akan ada barang laundry yang hilang dan tertukar</p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-tint" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>
					
					</div>
					<div class="col-md-4 w3l_mid">
					<div class="bulb">
						<img src="images/pic.jpg" alt="" />
					</div>
					</div>
					<div class="col-md-4 wthree_r">
					<div class="col-md-2 w3ls_ic">
							<i class="fa fa-street-view" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Dapat Taruh Barang Laundry Via Online</h4>
							<p class="move">Barang yang akan dilaundry dapat ditaruh via online</p>
						</div>
						<div class="clearfix"></div>
					
					 <div class="col-md-2 w3ls_icr">
							<i class="fa fa-fast-forward" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Efisien</h4>
							<p class="move">Tidak membuang-buang waktu, tenaga, biaya. Karena dengan adanya website, anda dapat melakukannya semua serba online kecuali pembayaran</p>
						</div>
						<div class="clearfix"></div>
					
					<div class="col-md-2 w3ls_icr">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3_txt">
							<h4>Cepat</h4>
							<p class="move"> Mencuci selesai tidak lebih dari 7 hari</p>
						</div>
						<div class="clearfix"></div>
					</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
				<!-- </div> -->
	</div>
		</div>
	</div>
	<!-- //features -->
</div>
</div>
<!-- Order Form-->
<div class="w3ls_frmrt">
 <div class="container">
	<h3>Contoh Layanan Laundry Kami</h3>

<?php include('Price/index.php')?>
		<div class="clearfix"></div>
 </div>
</div>

<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body"><!-- 
        <p>Some text in the modal.</p> -->
      </div>
    </div>
  </div>
</div>
</div>

<!-- Services-->
<div class="services" id="services">
<div class="container">
<h3>Pelayanan</h3>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i>
<h4>Cuci Pakai Mesin Cuci Dryer</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>
<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
<h4>Kering</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>

<div class="col-md-4 hhh">
<div class="wthree_rt">
<i class="fa fa-bolt" aria-hidden="true"></i>
<h4>Setrika</h4>
<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p> -->
</div>
</div>
<!-- <div class="clearfix"></div>
<div class="w3l_serdwn"> -->
<!-- <div class="col-md-4 hhh">
<div class="agile_ser">
<i class="fa fa-user" aria-hidden="true"></i>
<h4>Personal laundress</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p>
</div>
</div> -->
<!-- <div class="col-md-8 W3ls_serv">
<div class="agile_ser ">
<div class="col-md-6 wthree_l">
<p>Lorem Ipsum is simply dummy text of the printing and typesetting of the in industry.</p>
</div>
<div class="col-md-6 wthree_rts">
<img src="images/s1.jpg" class="img-responsive" alt="">
</div>
<div class="clearfix"></div>
</div>
</div> -->
<!-- <div class="clearfix"></div>
</div> -->
</div>
</div>
<!-- /Services-->
   <!-- gallery -->
   <div class="gallery" id="gallery">
         <div class="container-fluid">
            <h3>Galeri</h3>
            <div class="about-bottom  w3ls-team-info">
                <div class="col-md-12">
                    <div id="Carousel" class="carousel slide">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar6.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar7.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar7.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar1.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/gambar2.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                        <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                            <img src="images/gambar5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
	</div>
              
<div class="testimonials" id ="testimonials">
<div class="container">
 <div class="tittle-agileinfo">
			<h3>Kita Mempunyai Harga yang Terjangkau </h3>
			</div>
						<div class="sreen-gallery-cursual">
            
            <?php
            $a=10; 
              while ($row=$GET_service->fetch_object()) {
            $a++;
                   ?>
              <div class="agile_dwng">
                <a href="#" data-toggle="modal" data-target="#myModa<?php echo $a?>"><?php echo $row->Services_Name?></a>
                  <div class="modal video-modal fade" id="myModa<?php echo $a?>" tabindex="-1" role="dialog" aria-labelledby="myModa<?php echo $a?>">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title"><?php echo $row->Services_Name?></h4>
                        </div>
                        <div class="modal-body">
                          <table class="table" style="color: black">
                            <thead>
                              <tr align="text-center">
                                <th ><center>Jenis <?php echo $row->Services_Name?></center></th>
                                <th ><center>Laundry/kg</center></th>
                                <th ><center>Delivery>1km</center></th>
                              </tr>               
                            </thead>
                            <tbody>
                          <?php
                            
                            // while ($Fetch=$GET_menu->fetch_object()) {
                              $sql="SELECT * from services_uploade where Services_Type='".$row->Services_Name."' ";
                              $info_sql=$db->query($sql);
                              while ($Fetch=$info_sql->fetch_object()) {
                          ?>

                                          <tr>
                                            <td><?php echo $Fetch->Services_Name ?></td>
                                            <td><?php echo $Fetch->Laundry_Price=='0'?'-':$Fetch->Laundry_Price ?></td>
                                            <td><?php echo $Fetch->Delivery_Price=='0'?'-':$Fetch->Delivery_Price
                                              ?></td>
                                          </tr>
                          <?php }?>                
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
<?php };?>
							</div>
							</div>
							</div>
		<!--/Testimonials-->
<!-- contact -->

	<div class="contact" id="contact">
		<div class="container">
			<div class="agile-contact-grids">
			     <h3>Kontak Kami Bila Anda Urgent Atau Ada Sebuah Pesan Khusus</h3>
				 	<div class="col-md-6 agile-contact-left">
					<div class="agileits-map">
					</div>
					<div class="map-grid">
						<iframe src="https://www.google.com/maps/place/Kirana+Laundry,+Jl.+Basuki+Rahmad+No.34,+Mangunharjo,+Kec.+Mayangan,+Kota+Probolinggo,+Jawa+Timur+67217/@-7.7466478,113.2280872,17z/data=!4m2!3m1!1s0x2dd7adb7850f4b3d:0xd5378cb7ea6ed552" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6 agile-contact-right">
					<div class="contact-form">
						
						<!--form action="" method="POST"-->
							<div class="styled-input agile-styled-input-top">
							<div class="styled-input">
								<input type="text" name="Name" id="Name" placeholder="Nama" required="">
                <input type="text" name="Phone" id="Phone" placeholder="No. telp" required="">
								<span></span>
							</div>
							
							<!-- <div class="styled-input">
								<input type="text" name="Phone_No" placeholder="Nomor Telp." required="">
								<span></span>
							</div> -->

							<div class="styled-input">
								<textarea name="Message" id="Message" placeholder="Pesan" required=""></textarea>
								<span></span>
							</div>
							<input type="submit" onclick="tes()" value="KIRIM" name="Formsubmit"> <button type="submit" onclick="tes()">Tes</button>
						<!--/form-->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	
	<br>
<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="list">
				<div class="col-md-3 wthree_fl">
					<a href="#">Kirana Laundry</a>
					</div>
				<div class="col-md-6 wthree_fc">
					<h6> Malang </h6>
					<h6> Jawa Timur </h6>
					<h6> Indonesia </h6>
					</div>
					<div class="col-md-3 wthree_fr">
					<h6>085234181838</h6>
					<h6><a href="mailto:kiranalaundry@gmail.com">kiranalaundry@gmail.com</a></h6>
					</div>
			</div>
		</div>
	</div>
	<!-- //footer -->
<div class="copyright">
		<div class="container">
			<p>© <?php echo date('Y');?> All rights reserved Kirana Laundry <a href=""></a></p>
		</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- flexSlider -->
	<script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :2,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>

<!-- //flexSlider -->
 <!-- /gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>
    <script>
      function tes(){
      var http = new XMLHttpRequest();
      var url = 'pesan.php';
      var Name = document.getElementById("Name").value;
      var Phone = document.getElementById("Phone").value;
      var Message = document.getElementById("Message").value;

      var params = 'Name='+Name+'&Telp='+Phone+'&Message='+Message;
      http.open('POST', url, true);

      //Send the proper header information along with the request
      http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      http.onreadystatechange = function() {//Call a function when the state changes.
          if(http.readyState == 4 && http.status == 200) {
              alert(http.responseText);
          }
      } 
      http.send(params);
    }
   
          </script>

          <script>
              $(document).ready(function () {
                  $('.cm-overlay').cmOverlay();
              });
    </script>
    <!-- //gallery -->

<!-- Move-to-top-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!--/Move-to-top-->
</body>
</html>