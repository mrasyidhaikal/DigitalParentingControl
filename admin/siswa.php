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

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../font/css/all.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
</style></head>


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
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Siswa">
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
  
       <form method="post" action="" enctype="multipart/form-data" role="form" class="col-md-10 go-right">
      <h2><i class="fas fa-users"></i>Registrasi Akun</h2>


  <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA</div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-10" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
           
      
 
      
           

                      <div class="form-group">        
                      <label class="form-label">Id User</label>
                      <input type="text" name="id" class="form-control" placeholder="Id User" required="required"/>
                      </div>     

                      <div class="form-group">        
                      <label class="form-label">Nama Siswa</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required="required"/>
                      </div>     


                      <div class="form-group"  >        
                      <label class="form-label">kelas</label>
                      <select class="form-control" name="kelas">
                        <option>XII RPL 1</option>
                        <option>XII RPL 2</option>
                        <option>XII RPL 3</option>
                      </select>
                      </div>     


                      <div class="form-group">
                      <input type="submit" name="kirim" class="btn btn-primary btn-lg"/>
                      </form>
                      </div> 
                   
                    
                  </table>
                  </div>
                  
              
                
                </div>
    </div>

    </form>
    </div>
  </div>
<?php 
if (isset($_POST['kirim'])) {
  include '../koneksi.php';
    $id = $_POST['id'];
    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];

      $query =mysql_query("INSERT INTO `tbl_siswa` ( `id_user`, `nama_siswa`, `kelas`) VALUES ( '$id', '$nama', '$kelas')").mysql_error();
      echo "<script>window.alert('Input Success');
  window.location='siswa.php'</script>";

    }


  
 ?>
                  
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">

    <thead>
        <tr>
          <th>Id_user</th>
          <th>Nama Siswa</th>
          <th>Kelas</th>
          <th></th>
        </tr>
    </thead>

    <tbody>
          <?php 
      include '../koneksi.php';
      $q = mysql_query("SELECT * FROM tbl_siswa");
      while ($row = mysql_fetch_array($q)) {
    
     ?>
        <tr>
            <td><?php echo $row['id_user']; ?></td>
            <td><?php echo $row['nama_siswa']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td><a href="siswa.php?delete=<?php echo $row['id_siswa']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              <a href="editsiswa.php?update=<?php echo $row['id_siswa']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
         
           </td>
           
        </tr>
        <?php } ?>
</div>
  </div>   
</main>
<?php 
include '../koneksi.php';


if (isset($_GET['delete'])) {
  $id =$_GET['delete'];
 $hapus = mysql_query("DELETE FROM `arkademy`.`tbl_siswa` WHERE `tbl_siswa`.`id_siswa` = '$id'");
  echo "<script>window.alert('Delete Success');
  window.location='siswa.php'</script>";
} 



?>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://use.fontawesome.com/2188c74ac9.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

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
