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
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Nilai">
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
  <div class="content-wrapper content-wrapper--with-bg">
    <div class="container">
    <div class="row">
      <h2><i class="fas fa-file-invoice"></i> Nilai Murid (per Bulan)</h2>


  <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA</div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-6" style="margin-left: 10px;">
        
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
           

          <form method="post" action="#">

                      <div class="form-group">        
                      <label class="form-label">ID Siswa</label>
                      
                      <select name="id_siswa" id="select" class="form-control" >
                          <option value="" disabled selected>Pilih ID Siswa</option>
                            <?php 
                            include '../koneksi.php';
                            $data = mysql_query("SELECT id_siswa , nama_siswa from tbl_siswa");
                             if ($data) {
                               while ($row = mysql_fetch_array($data)){
                                  ?>

                                  <option value="<?php echo $row['id_siswa'];?>"><?php echo $row['id_siswa']; echo "  ---  "; echo $row['nama_siswa']; ?></option>
                                                
                          <?php } } ?>
                        </select>

                      </div> 
                      
                      <div class="form-group">        
                      <label class="form-label">Nilai Bahasa Indonesia</label>
                      <input type="number" min="0" max="100" name="bindo" class="form-control" placeholder="Masukkan Nilai Bahasa Indonesia (Numeric 0-100)" required="required"/>
                      </div>
                      
                      <div class="form-group">        
                      <label class="form-label">Nilai Bahasa Inggris</label>
                      <input type="number" min="0" max="100" name="binggris" class="form-control" placeholder="Masukkan Nilai Bahasa Inggris (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Matematika</label>
                      <input type="number" min="0" max="100" name="matematika" class="form-control" placeholder="Masukkan Nilai Matematika (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Sejarah</label>
                      <input type="number" min="0" max="100" name="sejarah" class="form-control" placeholder="Masukkan Nilai Sejarah (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai PKN</label>
                      <input type="number" min="0" max="100" name="pkn" class="form-control" placeholder="Masukkan Nilai PKN (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Fisika</label>
                      <input type="number" min="0" max="100" name="fisika" class="form-control" placeholder="Masukkan Nilai Fisika (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Pemrograman Berorientasi Objek</label>
                      <input type="number" min="0" max="100" name="pbo" class="form-control" placeholder="Masukkan Nilai Pemrograman Berorientasi Objek (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Basis Data</label>
                      <input type="number" min="0" max="100" name="basisdata" class="form-control" placeholder="Masukkan Nilai Basis Data (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">
                      <input type="submit" name="fsubmit" class="btn btn-primary btn-lg"/>
                      </div> 
                   
                    
                  </table>
                  </div>
                  
              
                </form>

                <?php
                include '../koneksi.php';
                if(isset($_POST['fsubmit'])){
                
                $id_siswa = $_POST['id_siswa'];
                $bindo = $_POST['bindo'];
                $binggris = $_POST['binggris'];
                $matematika = $_POST['matematika'];
                $sejarah = $_POST['sejarah'];
                $pkn = $_POST['pkn'];
                $fisika = $_POST['fisika'];
                $pbo = $_POST['pbo'];
                $basisdata = $_POST['basisdata'];
                $date = date("l, d/M/Y");
                $avg = ($bindo + $binggris + $matematika + $sejarah+ $pkn + $fisika + $pbo + $basisdata) / 8;

                $q = "INSERT INTO `tbl_mapelrpl` 
                (`id_siswa`, `tanggal`, `bindo`, `binggris`, `matematika`, `sejarah`, `pkn`, `fisika`, `pbo`, `basisdata`,`avg`) 
                VALUES 
                ('$id_siswa', '$date', '$bindo', '$binggris', '$matematika', '$sejarah', '$pkn', '$fisika', '$pbo', '$basisdata','$avg')";

                mysql_query($q);
                
                echo "<script>window.alert('Input Data Success !');
                window.location='nilai.php'</script>";

                }
                
                ?>

                </div>
    </div>
  </div> 

                  
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>ID Siswa</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>Sejarah</th>
            <th>PKN</th>
            <th>Fisika</th>
            <th>Pemrograman Berorientasi Objek</th>
            <th>Basis Data</th>
            <th>Average</th>
            <th>Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php 
    include '../koneksi.php';
    
    $query = mysql_query("SELECT * FROM tbl_mapelrpl");
    while($row = mysql_fetch_array($query)){
      $panggilnama = $row['id_siswa'];
      $querynama = mysql_query("SELECT nama_siswa from tbl_siswa where id_siswa = $panggilnama");
      $row2 = mysql_fetch_array($querynama);

    ?>
        <tr>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row2['nama_siswa'] ?></td>
            <td><?php echo $row['bindo']; ?></td>
            <td><?php echo $row['binggris']; ?></td>
            <td><?php echo $row['matematika']; ?></td>
            <td><?php echo $row['sejarah']; ?></td>
            <td><?php echo $row['pkn']; ?></td>
            <td><?php echo $row['fisika']; ?></td>
            <td><?php echo $row['pbo']; ?></td>
            <td><?php echo $row['basisdata']; ?></td>
            <td><?php echo $row['avg'] ?></td>
            <td><a href="nilai.php?delete=<?php echo $row['id_mapelrpl']; ?>" class="btn btn-danger">Hapus</a>
            </td>

        </tr>
    <?php } ?>
</div>
  </div>   
</main>

<?php
if (isset($_GET['delete'])){

  $id = $_GET['delete'];
  $query = mysql_query("DELETE FROM `tbl_mapelrpl` WHERE `tbl_mapelrpl`.`id_mapelrpl` = $id");

  if ($query) {
    ?>
    <script type="text/javascript">
      document.location.href='nilai.php';
      alert("Delete Data Success !");
      </script>
     <?php
         }
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