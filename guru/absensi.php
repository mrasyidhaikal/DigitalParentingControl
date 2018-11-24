<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php 
session_start();
$level = $_SESSION['level'];
//echo "<script type='text/javascript'>alert('$level');</script>";
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
      
      <div class="header-icons-group">
        <a href="../logout.php"><div class="c-header-icon logout"><i class="fa fa-power-off"></i></a></div>
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
         <a href="akun.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pengaturan Akun">
            <div class="c-menu__item__inner"><i class="fa fa-cogs"></i>
              <div class="c-menu-item__title"><span>Pengaturan Akun</span></div>
            </div>
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
       <h2><i class="fas fa-file-invoice"></i>Input Absensi</h2>
  </div>
</div>

      <!--   -----------------------------------------------------------------   -->



      <?php 
        error_reporting(0);
       $tanggal='';
       $tanggal=$_GET['tanggal'];

       if ($tanggal=='') {
          $tanggal=date('Y-m-d');
       }
       
      // echo "<script type='text/javascript'>alert('$tanggal');</script>";
       $kelas=$_GET['kelas'];
      ?>
      <form action="" method="GET" name="cari">
      
  <div class="col-md-3 ">
    <input type="date" value="<?php echo $tanggal; ?>" class="form-control" max="<?php echo date('Y-m-d');?>" name="tanggal" >
  </div>
      
  <div class="col-md-3 ">
    <select name="kelas" class="form-control">
        <option value="XII RPL 1">XII RPL 1</option>
        <option value="XII RPL 2">XII RPL 2</option>
        <option value="XII RPL 3">XII RPL 3</option>
      </select>
  </div>

  <div class="col-md-3 ">
      <input type="submit" class="btn btn-primary" name="cari">
  </div>

      </form>

<div class="container"> 
  
  <label style="color: white">a</label>
  <br> 
  <label style="color: white">a</label>

</div>
<form action="" method="POST">
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
    $anu=$_GET['cari']; 
    // echo "<script type='text/javascript'>alert('$anu');</script>";
      
    if (isset($anu)) {
      // echo "<script type='text/javascript'>alert('$tanggal');</script>";
      

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
            <td><input type="radio" name="<?php echo $d['id_absen']; ?>" value="sakit" 
              <?php 
              if ($d['sakit']==1) {
              echo "checked";
            }; ?>>
            </td>
            <td><input type="radio" name="<?php echo $d['id_absen']; ?>" value="izin" 
              <?php 
              if ($d['izin']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="radio" name="<?php echo $d['id_absen']; ?>" value="alfa" <?php 
              if ($d['alfa']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="radio" name="<?php echo $d['id_absen']; ?>" value="hadir" <?php 
              if ($d['hadir']==1) {
              echo "checked";
            }; ?> >
            </td>
            <td><input type="text" name="<?php echo $itu=$d['id_absen'].'keterangan'; ?>" value="<?php echo $d['keterangan']; ?>">
              <?php?></td>
          </tr>
          <?php 
        }
      //"INSERT INTO `absensi` ( `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`, `keterangan`) VALUES ( '', '$kelas', '$nama', '$sakit', '$izin', '$alfa', '$hadir', '$keterangan')";

      }

      }else{

      $no = 1;
      //echo "<script type='text/javascript'>alert('$kelas');</script>";
      $data = mysql_query("select * from tbl_siswa where kelas='$kelas'");

       while($d = mysql_fetch_array($data))
        {
          ?>
          <tr >
            <td><?php echo $no++; ?></td>
            <td><?php echo $tanggal ?></td>
            <td><?php echo $d['nama_siswa']; ?></td>
            <td><input type="radio" name="<?php echo $d['id_siswa']; ?>" value="sakit" >
            </td>
            <td><input type="radio" name="<?php echo $d['id_siswa']; ?>" value="izin" >
            </td>
            <td><input type="radio" name="<?php echo $d['id_siswa']; ?>" value="alfa" >
            </td>
            <td><input type="radio" name="<?php echo $d['id_siswa']; ?>" value="hadir" >
            </td>
            <td><input type="text" name="<?php echo $itu=$d['id_siswa'].'keterangan'; ?>" value=""></td>
          </tr>
          <?php 
        }       
      }
    }     
    ?>
</table>
<br>
<input type="submit" class="btn btn-primary" name="save" value="save">

  <?php     
    if (isset($_POST['save'])) {
      # code...
      //echo "<script type='text/javascript'>alert('1');</script>";
      $tanggal = $_GET['tanggal'];
      
      $kel="kelas";
      $kelas = $_GET[$kel];
      //echo "<script type='text/javascript'>alert('2');</script>";
      $no = 1;
      $query="select * from absensi where tanggal ='$tanggal' and kelas='$kelas'";
      //echo "<script type='text/javascript'>alert('$query');</script>";
      $data = mysql_query("$query");
      //echo "<script type='text/javascript'>alert('3');</script>";
      if (isset($tanggal,$kelas)) {
      
      $ok=mysql_num_rows($data); 
      // echo "<script type='text/javascript'>alert('$ok');</script>";
      if ($ok<1) {

          $data = mysql_query("select * from tbl_siswa where kelas='$kelas'");
           while($d = mysql_fetch_array($data)){

          // echo "<script type='text/javascript'>alert('$tanggal');</script>";
              $nama=$d['nama_siswa'];
              $id=$d['id_siswa'];
          // echo "<script type='text/javascript'>alert('$nama');</script>";
              $hmm=$d['id_siswa'].'keterangan';
              // echo "<script type='text/javascript'>alert('$hmm');</script>";
              $anu=$_POST[$id];          
          // echo "<script type='text/javascript'>alert('$anu');</script>";
              $keterangan=$_POST[$hmm];
          // echo "<script type='text/javascript'>alert('$keterangan');</script>";
              $sakit="0";
              $izin="0";
              $alfa="0";
              $hadir="0";
              if ($anu=="sakit") {
                $sakit="1";
              }elseif ($anu=="izin") {
                $izin="1";
              }elseif ($anu=="alfa") {
                $alfa="1";
              }elseif ($anu=="hadir") {
                $hadir="1";
              }else{

              }
          // echo "<script type='text/javascript'>alert('$sakit');</script>";
          // echo "<script type='text/javascript'>alert('$alfa');</script>";
          // echo "<script type='text/javascript'>alert('$izin');</script>";
          // echo "<script type='text/javascript'>alert('$hadir');</script>";
              //$keterangan=$_POST['keterangan'];
              $query=mysql_query("INSERT INTO `absensi` ( `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`,`keterangan`) VALUES ( '$tanggal', '$kelas', '$nama', '$sakit', '$izin', '$alfa', '$hadir','$keterangan')");

            }
          echo "<script type='text/javascript'>alert('sukses');window.location='absensi.php'</script>";
            
            //"INSERT INTO `absensi` ( `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`, `keterangan`) VALUES ( '', '$kelas', '$nama', '$sakit', '$izin', '$alfa', '$hadir', '$keterangan')"; 
      }else{
        $data=mysql_query("select * from absensi where tanggal ='$tanggal' and kelas='$kelas'");
      echo "<script type='text/javascript'>alert('$query');</script>";
        
        
        while($d = mysql_fetch_array($data)){
      
      // echo "<script type='text/javascript'>alert('5');</script>";
          $id_absen=$d['id_absen'];
          $tanggal=$d['tanggal'];
      //echo "<script type='text/javascript'>alert('$tanggal');</script>";    
          $nama=$d['nama'];
      // echo "<script type='text/javascript'>alert('$nama');</script>";
          $hmm=$d['id_absen'].'keterangan';
          $anu=$_POST[$id_absen];   
      // echo "<script type='text/javascript'>alert('$anu');</script>";
          $keterangan=$_POST[$hmm];
          // echo "<script type='text/javascript'>alert('$keterangan');</script>";$sakit="0";
          $izin="0";
          $alfa="0";
          $hadir="0";
          $sakit="0";
          if ($anu=="sakit") {
            $sakit="1";
          }
          if ($anu=="izin") {
            $izin="1";
          }
          if ($anu=="alfa") {
            $alfa="1";
          }
          if ($anu=="hadir") {
            $hadir="1";
          }else{

          }
      // echo "<script type='text/javascript'>alert('$sakit');</script>";
      // echo "<script type='text/javascript'>alert('$alfa');</script>";
      // echo "<script type='text/javascript'>alert('$izin');</script>";
      // echo "<script type='text/javascript'>alert('$hadir');</script>";
          //$keterangan=$_POST['keterangan'];
          $query=mysql_query("UPDATE `absensi` SET  `tanggal` = '$tanggal', `kelas` = '$kelas', `nama` = '$nama', `sakit` = '$sakit', `izin` = '$izin', `alfa` = '$alfa', `hadir` = '$hadir',`keterangan`='$keterangan' WHERE `absensi`.`id_absen` ='$id_absen'");
          }
          echo "<script type='text/javascript'>alert('sukses');window.location='absensi.php'</script>";
            
        }

            
      //"INSERT INTO `absensi` ( `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`, `keterangan`) VALUES ( '', '$kelas', '$nama', '$sakit', '$izin', '$alfa', '$hadir', '$keterangan')";
      }
    }
    
      echo "<script type='text/javascript'>window.location ='http://localhost/DigitalParentingControl/guru/absensi.php');</script>"; 
?>


</div>
</form>

<!-- ------------------------------------------ -->



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

</body>
</html>