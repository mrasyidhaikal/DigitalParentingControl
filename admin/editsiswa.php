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


  <!-- --------------------------------------------------------------------- -->


<?php 
include '../koneksi.php';
$id_siswa = $_GET['update'];
$query = mysql_query("SELECT * FROM tbl_siswa WHERE id_siswa = $id_siswa");
$data = mysql_fetch_array($query);
?>
  
<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
    <div class="container">
    <div class="row">
  
       <form method="post" action="" enctype="multipart/form-data" role="form" class="col-md-10 go-right">
      <h2><i class="fas fa-user-edit  "></i>Edit Siswa</h2>

      <div class="col-sm-10" style="margin-left: 10px;">        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
  
                      <div class="form-group">        
                      <label class="form-label">Id User</label>
                      <input type="text" value="<?php echo $data['id_user'] ?>" name="id" class="form-control" placeholder="Username" required="required"/>
                      </div>     

                      <div class="form-group">        
                      <label class="form-label">Nama</label>
                      <input type="text" value="<?php echo $data['nama_siswa'] ?>" name="nama" class="form-control"  required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">kelas</label>
                      <input type="text" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>"  required="required"/>
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
               
      $query =mysql_query("UPDATE `tbl_siswa` SET `id_user` = '$id', `nama_siswa` = '$nama', `kelas` = '$kelas' WHERE `tbl_siswa`.`id_siswa` = $id_siswa").mysql_error();
      echo "<script>window.alert('Input Success');window.location='siswa.php'</script>";

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

    </body>
    
</html>