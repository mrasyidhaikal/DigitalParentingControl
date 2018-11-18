<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php 
include 'koneksi.php';
session_start();
$level = $_SESSION['level'];

if ($level != 'parent') {
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
<main class="l-main">
   <div class="container">
  <div class="row">

    <section class="content">
    
      <div class="col-md-8 col-md-offset-2">
          <h1><i class="fa fa-bullhorn"></i> Pengumuman</h1>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="pull-right">
              
              <div class="form-group">
                <form method="post" action="">
                <input type="text" name="cari" class="form-control" placeholder="Cari Judul Pemberitahuan" id="keyword">
               
              </form>
              </div>

              
            </div>
            <div id="content">
            <div class="table-container">
              <table class="table table-filter">
                <tbody>
                <?php 
                include '../koneksi.php';
                // Pagination
                $jumlahdata_per_page = 4;

                $result = mysql_query("SELECT * FROM pengumuman");
                $jumlah_data = mysql_num_rows($result);
                $jumlah_halaman= ceil($jumlah_data / $jumlahdata_per_page);


               $aktif = (isset($_GET['halaman'] ) ) ? $_GET['halaman'] : 1;
              
                // Awal Data
               $awaldata=($jumlahdata_per_page * $aktif) -$jumlahdata_per_page ;
          
              
               // End Pagination Logic

                $query = mysql_query("SELECT * FROM pengumuman JOIN users  ON pengumuman.id_user = users.id_user ORDER BY `id_pengumuman` DESC LIMIT $awaldata, $jumlahdata_per_page
                  ");
               
                while ($row = mysql_fetch_array($query)){
              


                 ?>
                  <tr data-status="pagado">
                    <td>
                      <div class="media">
                        <a href="#" class="pull-left">
                          <img width="100px" src="<?php echo $row['foto']; ?>" class="media-photo">
                        </a>
                        <div class="media-body">
                          <span class="media-meta pull-right"><?php echo $row['tanggal']; ?></span>
                        
                      

                          <h4 class="title">
                            <b>
                            <?php echo $row['judul']; ?>
                            </b>
                          </h4>
                          <p class="summary"><?php echo $row['isi']; ?></p>
                          <br>
                            <span class="media-meta pull-right"><a href="<?php echo $row['file']; ?>">Download File <i class="fas fa-file-download"></i></a></span>
                        </div>
                      </div>
                    </td>
                  </tr>
               <?php } ?>

                </tbody>

              </table>
              </div>


<!-- Pagination -->
<div class="col-md-12 col-md-offset-8">
  <nav aria-label="...">
  <ul class="pagination">
    <?php if($aktif > 1): ?>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?php echo $aktif-1; ?>">Previous</a>
    </li>
    <?php else: ?>
       <li class="page-item disabled">
      <a class="page-link" href="">Previous</a>
    </li>
  <?php endif; ?>
   <?php for ($i=1; $i <= $jumlah_halaman; $i++):?>
    <?php if($i == $aktif) : ?>
    <li class="page-item active">
      <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
    <?php else: ?>
        <li class="page-item">
      <a class="page-link" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>
    <?php endif; ?>
   <?php endfor; ?>

    <?php if($aktif < $jumlah_halaman): ?>
    <li class="page-item">
      <a class="page-link" href="?halaman=<?php echo $aktif+1; ?>">Next</a>
    </li>
    <?php else: ?>
       <li class="page-item disabled">
      <a class="page-link" href="">Next</a>
    </li>
  <?php endif; ?>

  </ul>
</nav>
</div>
<!-- end pagination -->

            </div>
          </div>
        </div>




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