<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 
session_start();
$level = $_SESSION['level'];
if ($level != 'guru') {
    header('location:../login.php');
}
 ?>

<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <link rel="stylesheet" type="text/css" href="guru.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>

<body class="sidebar-is-reduced">
  <header class="l-header">
    <div class="l-header__inner clearfix">
      <div class="c-header-icon js-hamburger">
        <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
      </div>
      <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--header-icon animated shake">12</span><i class="fa fa-bell"></i>
        <div class="c-dropdown c-dropdown--notifications">
          <div class="c-dropdown__header"></div>
          <div class="c-dropdown__content"></div>
        </div>
      </div>
      <div class="c-search">
        <input class="c-search__input u-input" placeholder="Search..." type="text"/>
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
        <a href="../guru/index.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pengumuman">
            <div class="c-menu__item__inner"><i class="fa fa-bullhorn"></i>
              <div class="c-menu-item__title"><span>Pengumuman</span></div>
            </div>
          </li>
        </a>
          <a href="nilai.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Nilai">
            <div class="c-menu__item__inner"><i class="fa fa-chart-bar"></i>
              <div class="c-menu-item__title"><span>Nilai</span></div>
            </div>
          </li>
          </a>
          <a href="absensi.php">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Absensi">
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
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">

      <!--   -----------------------------------------------------------------   -->
      <form action="" method="post">
      <input type="date" name="tanggal">
      <select name="kelas"><option value="12RPL1">12RPL1</option></select>
      <input type="submit" name="cari">
      </form>

<div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">
  <tr>
  <th>NO</th>
  <th>Tanggal</th>
  <th>Nama</th>
  <th>Sakit</th>
  <th>izin</th>
  <th>Alfa</th>
  <th>Hadir</th>
  <th>Keterangan</th>
  </tr>
<?php 

    include '../koneksi.php';   
    if (isset($_POST['cari'])) {

      $tanggal = $_POST['tanggal'];
      $kelas = $_POST['kelas'];

      $no = 1;
      $data = mysql_query("select * from absensi where tanggal ='$tanggal' and kelas='$kelas'");
        
      if (mysql_num_rows($data)) {
       if (isset($tanggal,$kelas)) {
              
        while($d = mysql_fetch_array($data))
        {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><input type="radio" name="<?php echo $d['nama']; ?>" value="sakit" 
              <?php 
              if ($d['sakit']==1) {
              echo "checked";
            }; ?>>
            </td>
            <td><input type="radio" name="<?php echo $d['nama']; ?>" value="izin" 
              <?php 
              if ($d['izin']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="radio" name="<?php echo $d['nama']; ?>" value="alfa" <?php 
              if ($d['alfa']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="radio" name="<?php echo $d['nama']; ?>" value="hadir" <?php 
              if ($d['hadir']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
          </tr>
          <?php 
        }
      ?><!--$tanggal=$d['tanggal'];
      $nama=$d['nama'];
      $sakit=$d['sakit'];
      $izin=$d['izin'];
      $alfa=$d['alfa'];
      $hadir=$d['hadir'];
      $keterangan=$d['keterangan'];
      $query1="";
      $query1+="INSERT INTO `absensi` ( `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`, `keterangan`) VALUES ( '$tanggal', '$kelas', '$nama', '$sakit', '$izin', '$alfa', '$hadir', '$keterangan')";

      UPDATE `absensi` SET `id_absen` = '2', `tanggal` = '1018-11-15', `kelas` = '22RPL1', `nama` = '2teven', `sakit` = '1', `izin` = '1', `alfa` = '0', `hadir` = '1', `keterangan` = 'qaasdasd' WHERE `absensi`.`id_absen` = 1

      
      -->
      <?php
      }

      }
      else
      {

      $no = 1;
      echo "<script type='text/javascript'>alert('$kelas');</script>";
      $data = mysql_query("select * from siswa where kelas='$kelas'");

       while($d = mysql_fetch_array($data))
        {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tanggal ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><input type="radio" name="absen" value="sakit"></td>
            <td><input type="radio" name="absen" value="izin"></td>
            <td><input type="radio" name="absen" value="alfa"></td>
            <td><input type="radio" name="absen" value="hadir"></td>
            <td><input type="text" name="keterangan" value=""></td>
          </tr>
          <?php 
        }
      
       
      }
    }     

    ?>
</table>
</div>



<!-- ------------------------------------------ -->



  </div> 
            </div>
        </a>
    </div>
      <div class="row">

        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
         Messages
        </div>        
                
              <div class="panel-body"> 
                <div class="alert alert-success">
                  <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info">
                  <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning">
                  <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-danger">
                  <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
              </div>
        </div>
      </div>            
        </div>                
                  
  </div>
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </thead>
    
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
        </tr>
        <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
        </tr>
     
  </div>   
</main>
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