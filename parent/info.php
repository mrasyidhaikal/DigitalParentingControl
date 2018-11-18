<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
session_start();
include '../koneksi.php';
$level = $_SESSION['level'];

if ($level != 'parent') {
    header('location:../login.php');
}
 ?>
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
a
</style>
<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>

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
          <a href="index.php">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Pengumuman">
            <div class="c-menu__item__inner"><i class="fa fa-bullhorn"></i>
              <div class="c-menu-item__title"><span>Pengumuman</span></div>
            </div>
          </li></a>
         <a href="nilaimurid.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Nilai">
            <div class="c-menu__item__inner"><i class="fa fa-chart-bar"></i>
              <div class="c-menu-item__title"><span>Nilai</span></div>
            </div>
          </li>
          </a>

         <a href="absensi.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Absensi">
            <div class="c-menu__item__inner"><i class="fas fa-calendar-alt"></i>
              <div class="c-menu-item__title"><span>Absensi</span></div>
            </div>
          </li>
        </a>

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pengaturan Akun">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Pengaturan Akun</span></div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
<main class="l-main" >
   <div class="container">

<div class="box" style="margin-top: -20px;">
    <div class="container" >
      <div class="row">
       
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        <i class="far fa-address-book fa-3x"></i>
            <?php 
             $panggilnama = $_SESSION['id_user'];
             $query1 = mysql_query("SELECT * from tbl_siswa where id_user = $panggilnama"); 
             $carinama = mysql_fetch_array($query1);
             $id_siswa = $carinama['id_siswa'];
             $query = mysql_query("SELECT * from tbl_mapelrpl where id_siswa = $id_siswa");
             $namanya=$carinama['nama_siswa'];
            $query1 = mysql_query("SELECT * FROM absensi WHERE nama = '$namanya' AND sakit = '1' ");
            $query2 = mysql_query("SELECT * FROM absensi WHERE nama = '$namanya' AND alfa = '1' ");
            $query3 = mysql_query("SELECT * FROM absensi WHERE nama = '$namanya' AND izin = '1' ");
            $hasil1 = mysql_num_rows($query1);
            $hasil2 = mysql_num_rows($query2);
            $hasil3 = mysql_num_rows($query3);

            ?>      
            
            <div class="title"> 
              <h3>Kehadiran</h3>
            </div>
                        
            <div class="text">
              <p>Sakit:<?php echo $hasil1 ?></p>
              <P>Alfa:<?php echo $hasil2 ?></P>
              <p>Izin :<?php echo $hasil3 ?></p>
            </div>
                        
            <a href="absensi.php" class="btn btn-primary">Learn More</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
              
            <i class="fa fa-chart-bar fa-3x"></i>
                    
            <div class="title">
              <h3>Nilai</h3>
            </div>
              <?php 
               $panggilnama = $_SESSION['id_user'];
              $bulan = date('F');
              $query = mysql_query("SELECT * FROM tbl_mapelrpl WHERE id_siswa = '$panggilnama' AND tanggal = '$bulan'  ");
              $data = mysql_fetch_array($query);
               ?>
            <div class="text">
              <P>Nilai Rata-Rata Bulan : <?php echo $bulan ?></P>
              <P>Nilai Rata-Rata : <?php echo $data['avg'] ?></P>
            </div>
                        
            <a href="nilaimurid.php" class="btn btn-primary" style="margin-top:20px;">Learn More</a>
                        
           </div>
        </div>   
        
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               
          <div class="box-part text-center">
                        
                       <i class="fa fa-bullhorn fa-3x"></i>
                        
            <div class="title">
              <h3>Pengumuman</h3>
            </div>
              <?php 
              $query = mysql_query("SELECT * FROM pengumuman");
              $nilai = mysql_num_rows($query);
               ?>           
            <div class="text">
              <span>Total Pengumuman:<?php echo $nilai; ?></span>
            </div> 
                        
            <a href="index.php" class="btn btn-primary" style="margin-top:60px;">Learn More</a>
                        
           </div>
        </div>   
        </div>
       
    </div>    
    </div>
</div>
  </div></div>


</main>

<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://use.fontawesome.com/2188c74ac9.js'></script>
<script src="script.js"></script>
<script type="text/javascript">
  
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