<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../js/jsmanual.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style1.css">

<?php 
session_start();
$level = $_SESSION['level'];
if ($level != 'admin') {
    header('location:../login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" >
<head>
<style type="text/css">
  
  body{
background: #f2f2f2;
}
  span{
    font-size:15px;

}
.box{
    padding:60px 0px;

}

.box-part{

    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
 box-shadow:0 20px 50px rgba(0,0,0,.1);
 height: 320px;
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
}
.far{
     color:#4183D7;
}
</style>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>
<script type="text/javascript">
   $(document).ready( function () {
    $('#tabel').DataTable();
} ); 
</script>
<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="header-icons-group">
        <div class="c-header-icon logout"><a href="../logout.php"><i class="fa fa-power-off"></a></i></div>
      </div>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt"><img src="../img/mhs.png" class="img-responsive" width="43px"></div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
        <ul class="u-list">

          <a href="akun.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="User">
            <div class="c-menu__item__inner"><i class="fa fa-user"></i>
              <div class="c-menu-item__title"><span>User</span></div>
            </div>
          </li>

          <a href="siswa.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Siswa">
            <div class="c-menu__item__inner"><i class="fa fa-users"></i>
              <div class="c-menu-item__title"><span>Siswa</span></div>
            </div>
          </li>
          </a>

          </li>
          </a>
        </ul>
      </nav>
    </div>
  </div>

  
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    <div class="container">
    <div class="row">
  
    <div class="box" style="margin-top: -20px;">
    <div class="container" >
      <div class="row">
       
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        <i class="far fa-address-book fa-3x"></i>
            
            <div class="title">
              <h3>siswa</h3>
            </div>
              <?php 
              include '../koneksi.php';
              $query = mysql_query("SELECT * FROM `tbl_siswa`");
              $nilai = mysql_num_rows($query);
               ?>           
            <div class="text">
              <span>Total Siswa Yang Terdaftar:<?php echo $nilai; ?></span>
            </div> 

            <a href="siswa.php" class="btn btn-primary">Learn More</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
              
            <i class="fa fa-chart-bar fa-3x"></i>
                    
            <div class="title">
              <h3>Guru</h3>
            </div>
              <?php 
              include '../koneksi.php';
              $query = mysql_query("SELECT * FROM `users` where level='guru'");
              $nilai = mysql_num_rows($query);
               ?>           
            <div class="text">
              <span>Total guru Yang Terdaftar:<?php echo $nilai; ?></span>
            </div> 
                        
            <a href="akun.php" class="btn btn-primary">Learn More</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        
                       <i class="fa fa-bullhorn fa-3x"></i>
                        
            <div class="title">
              <h3>Orang Tua</h3>
            </div>
              <?php 
              include '../koneksi.php';
              $query = mysql_query("SELECT * FROM `users` where level='parent'");
              $nilai = mysql_num_rows($query);
               ?>           
            <div class="text">
              <span>Total Orang Tua Yang Terdaftar:<?php echo $nilai; ?></span>
            </div> 
                        
            <a href="akun.php" class="btn btn-primary">Learn More</a>
                        
           </div>
        </div>   
        </div>
       
    </div>    
    </div>
</div>
  </div></div>
</main>
<?php 
if (isset($_GET['id'])) {
  $id =$_GET['id'];
  $hapus = mysql_query("DELETE FROM `arkademy`.`pengumuman` WHERE `pengumuman`.`id_pengumuman` = $id");
  echo "<script>window.alert('Delete Success');
  window.location='index.php'</script>";
} 

?>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<!-- Data tables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- end -->
<script type="text/javascript">
 $(document).ready( function () {
    $('#tabel').DataTable();
} ); 
  "use strict";

var Dashboard = function () {
  var global = {
    tooltipOptions: {
      placement: "right"
    },
    menuClass: ".c-menu"
  };

  var menuChangeActive = function menuChangeActive(el) {
    var hasSubmenu = $(el).hasClass("has-submenu");
    $(global.menuClass + " .is-active").removeClass("is-active");
    $(el).addClass("is-active");

    // if (hasSubmenu) {
    //  $(el).find("ul").slideDown();
    // }
  };

  var sidebarChangeWidth = function sidebarChangeWidth() {
    var $menuItemsTitle = $("li .menu-item__title");

    $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
    $(".hamburger-toggle").toggleClass("is-opened");

    if ($("body").hasClass("sidebar-is-expanded")) {
      $('[data-toggle="tooltip"]').tooltip("destroy");
    } else {
      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };

  return {
    init: function init() {
      $(".js-hamburger").on("click", sidebarChangeWidth);

      $(".js-menu li").on("click", function (e) {
        menuChangeActive(e.currentTarget);
      });

      $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
    }
  };
}();

Dashboard.init();
//# sourceURL=pen.js
</script>

</body></html>