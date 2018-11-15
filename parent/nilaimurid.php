<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../js/jsmanual.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style1.css">
<link rel="stylesheet" type="text/css" href="parent.css">

<?php 
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
      <a href="../logout.php">  <div class="c-header-icon logout"><i class="fa fa-power-off"></a></i></div>
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

<div class="container">
	<div class="row">
		<h2>Daftar Nilai Siswa SMK Multistudi High School Batam</h2>
    

    
    <!-- query ambil nama siswa -->

  <?php
  include '../koneksi.php';
      $panggilnama = $_SESSION['id_user'];
      $query1 = mysql_query("SELECT * from tbl_siswa where id_user = $panggilnama"); 
      $carinama = mysql_fetch_array($query1);
      $id_siswa = $carinama['id_siswa'];
      $query = mysql_query("SELECT * from tbl_mapelrpl where id_siswa = $id_siswa");


      ?>
    <h4>Nama Murid : <b><?php echo $carinama['nama_siswa']; ?></b></h4>
    <h5>Hasil</h5>

    <div class="col-sm-4">
    <form action="" method="POST">
        <select name="bulan" id="bulan" class="form-control ">
              <option selected disabled>Pilih Bulan</option>
              <option value="January">Januari</option>
              <option value="February">Februari</option>
              <option value="March">Maret</option>
              <option value="April">April</option>
              <option value="May">Mei</option>
              <option value="June">Juni</option>
              <option value="July">Juli</option>
              <option value="August">Agustus</option>
              <option value="September">September</option>
              <option value="October">Oktober</option>
              <option value="November">November</option>
              <option value="December">Desember</option>
        </select>

<div class="col-sm-2">
<button type="submit" class="btn btn-primary" name="tampilbulan" >Tampilkan</button>
        </form>
       </div>
    </div>
</div>



	</div>
    
    <div class="row">
    <?php
     while ($row = mysql_fetch_array($query)) {
      $bindo = $row['bindo'];
      $binggris = $row['binggris'];
      $matematika = $row['matematika'];
      $sejarah = $row['sejarah'];
      $pkn = $row['pkn'];
      $fisika = $row['binggris'];
      $pbo = $row['pbo'];
      $basisdata = $row['basisdata'];
      $avg = $row['avg'];

      ?>
      
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-danger">
          
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-book"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
					Bahasa Indonesia : <label class="label label-danger"><?php echo $bindo; ?></label>
					</h3>
					<p>
						 Nilai: 
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $bindo; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $bindo; ?>%" >
             <?php echo $bindo; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-user-circle"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Bahasa Inggris : <label class="label label-success"> <?php echo $binggris; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $binggris; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $binggris; ?>%" >
             <?php echo $binggris; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-superscript"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Matematika : <label class="label label-primary"> <?php echo $matematika; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?php echo $matematika; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $matematika; ?>%" >
             <?php echo $matematika; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-search"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Sejarah : <label class="label label-info"> <?php echo $sejarah; ?></label>
					</h3>
					<p>
						Nilai:
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $sejarah; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $sejarah; ?>%" >
             <?php echo $sejarah; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>

<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-danger">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-balance-scale"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
					PKN : <label class="label label-danger"><?php echo $pkn; ?></label>
					</h3>
					<p>
						 Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $pkn; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pkn; ?>%" >
             <?php echo $pkn; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-flask"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Fisika : <label class="label label-success"> <?php echo $fisika; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $fisika; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $fisika; ?>%" >
             <?php echo $fisika; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-desktop"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Pemrograman Berorientasi Objek : <label class="label label-primary"> <?php echo $pbo; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="<?php echo $pbo; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pbo; ?>%" >
             <?php echo $pbo; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-6">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-database"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Basis Data : <label class="label label-info"> <?php echo $basisdata; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $basisdata; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $basisdata; ?>%" >
             <?php echo $basisdata; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-12">
			<div class="offer offer-radius offer-warning">
				<div class="shape">
					<div class="shape-text">
						<span class="fa fa-file-text-o"></span>							
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Nilai Rata - Rata : <label class="label label-warning"> <?php echo $avg; ?></label>
					</h3>
					<p>
						Nilai :
						<br> 
                        <div class="progress">
             <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $avg; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $avg; ?>%" >
             <?php echo $avg; ?> / 100
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>

    <?php  } ?>

  </div>
</div>


    </div>
  </div>
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



                  
  <div class="container"> 

    <!-- Source Code Table -->

    <!-- <?php 
    include '../koneksi.php';
    
    if(isset($_POST['tampilbulan'])){
      $bulan = $_POST['bulan'];
      $query = mysql_query("SELECT * FROM tbl_mapelrpl where tanggal LIKE '%$bulan%' and id_siswa =  ");
    }
    
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
        <?php } ?>  -->
</main>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script src='https://use.fontawesome.com/2188c74ac9.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<!-- Data tables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- end -->
<script type="text/javascript">

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