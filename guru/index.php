<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../js/jsmanual.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style1.css">

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
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Pengumuman">
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

          <a href="nilai.php">

          <a href="absensi.php">

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Absensi">
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
  
       <form method="post" action="" enctype="multipart/form-data" role="form" class="col-md-10 go-right">
      <h2><i class="fas fa-bullhorn"></i> Pengumuman Murid</h2>


  <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA</div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-10" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
           
      
 
      
           
            
                      <div class="form-group">        
                      <label class="form-label">Judul Pengumuman</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul" required="required"/>
                      </div>     

                      <div class="form-group">        
                      <label class="form-label">Isi Pengumuman</label>
                      <textarea name="isi" class="form-control" placeholder="Isi Pengumuman" required="required"/>
                      </textarea>

                      <div class="form-group">        
                      <label class="form-label">File Pengumuman</label>
                      <input type="file" name="ddf" class="form-control"   required="required"/>
                      </div>
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
    $judul = $_POST['judul'];
    $isi  = $_POST['isi'];
    $tanggal = date("Y-m-d H:i:s");
                  
    $fl_name=$_FILES['ddf']['name'];
    $tmp=$_FILES['ddf']['tmp_name'];

    // Validasi
    $ekstensi=['doc','pdf','jpg','jpeg','png'];
    $nama = explode('.', $fl_name);
    $nama=strtolower(end($nama));
    if (!in_array($nama, $ekstensi)) {
      echo "<script>window.alert('File Tidak Cocok');
  window.location='index.php'</script>";
    }
    else{
       $baru = uniqid();
                $baru .='.';
                $baru .=$nama;

                $path="../file/".$baru;
                $nama="file/".$baru;
                move_uploaded_file($tmp, $path);
      $query =mysql_query("INSERT INTO `arkademy`.`pengumuman` (`id_pengumuman`, `judul`, `file`, `isi`, `tanggal`) VALUES (NULL, '$judul', '$nama', '$isi', '$tanggal');").mysql_error();
      echo "<script>window.alert('Input Success');
  window.location='index.php'</script>";

    }


  }
 ?>
                  
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>Id Pengumuman</th>
            <th>Judul</th>
            <th>File</th>
            <th>Isi</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php 
      include '../koneksi.php';
      $q = mysql_query("SELECT * FROM pengumuman");
      while ($row = mysql_fetch_array($q)) {
    
     ?>
    <tbody>
        <tr>
            <td><?php echo $row['id_pengumuman']; ?></td>
            <td><?php echo $row['judul']; ?></td>
            <td><a href="../<?php echo $row['file']; ?>">Download File</a></td>
            <td><?php echo $row['isi']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
           <td><a href="index.php?id=<?php echo $row['id_pengumuman']; ?>" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php } ?>
</div>
  </div>   
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