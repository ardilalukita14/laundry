 <?php 
error_reporting(0);
$file = $_SERVER["SCRIPT_NAME"];
$break = explode('/', $file);
$pfile = $break[count($break) - 1];

$pos = strpos($pfile, 'index');
if ($pos !== false) $is_Dashboard = true;

$pos = strpos($pfile, 'menu_list');
if ($pos !== false) $is_menu_list= true;

$pos = strpos($pfile, 'user_order.php');
if ($pos !== false) $is_menu_list= true;

$pos = strpos($pfile, 'Confirmation_Order');
if ($pos !== false) $is_Confirmation_Order= true;

$pos = strpos($pfile, 'user_order_detail');
if ($pos !== false) $is_user_order_detail= true;

$pos = strpos($pfile, 'password_cahnge');
if ($pos !== false) $is_password_cahnge= true;
?>



 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Kirana Laundry | Selamat Datang   <?php echo $_SESSION['User_NAME'] ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item <?php echo(isset($is_Dashboard)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        
        <li class="nav-item <?php echo(isset($is_menu_list)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Order Send">
          <a class="nav-link" href="menu_list.php">
            <i class="fa fa-fw fa-cutlery"></i>
            <span class="nav-link-text">Order</span>
            
          </a>
        </li>
        <li class="nav-item  <?php echo(isset($is_Confirmation_Order)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Confirmation Order">
          <a class="nav-link" href="Confirmation_Order.php">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Konfirmasi Order</span>
            <span class="pull-right bg-color-greenLight" style="color: red">
              <?php $GET=get_order_temp_Count(); echo  $GET->num_rows;?>
                
              </span>
          </a>
        </li>
        <li class="nav-item <?php echo(isset($is_user_order_detail)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="LinOrder Detailk">
          <a class="nav-link" href="user_order_detail.php">
            <i class="fa fa-fw fa-truck"></i>
            <span class="nav-link-text">Order Detail</span>
            
          </a>
        </li>
        
        <li class="nav-item <?php echo(isset($is_password_cahnge)?' active' : '')?>" data-toggle="tooltip" data-placement="right" title="Change Password">
          <a class="nav-link" href="password_cahnge.php">
            <i class="fa fa-fw fa-lock"></i>
            <span class="nav-link-text">Ganti Nomor Telp.</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item">
          <a class="nav-link"  data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>