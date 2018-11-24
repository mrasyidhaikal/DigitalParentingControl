<?php 
if ($_GET['update']):?>

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
     <h2><i class="fas fa-file-invoice"></i> Edit Nilai Murid</h2>


 <?php 
include '../koneksi.php';
$id = $_GET['update'];
$query = mysql_query("SELECT * FROM tbl_raport WHERE id_mapelrpl = '$id' ");
$data = mysql_fetch_array($query);
  ?>
    <div class="row">
      <div class="col-sm-10" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;" class="text-center">
           
      
 
      
           
                        <div class="form-group">        

                        <label class="form-label">Semester</label>

                        <select name="semester" id="select" class="form-control" >
                            <option value="" disabled>Pilih Semester</option>

                                    <option value="semester1" <?php if( $agamaDariDatabase=='semester1'){echo "selected"; }>Semester 1</option>
                                    <option value="semester2" <?php if( $agamaDariDatabase=='semester2'){echo "selected"; }>Semester 2</option>
                                    <option value="semester3" <?php if( $agamaDariDatabase=='semester3'){echo "selected"; }>Semester 3</option>
                                    <option value="semester4" <?php if( $agamaDariDatabase=='semester4'){echo "selected"; }>Semester 4</option>
                                    <option value="semester5" <?php if( $agamaDariDatabase=='semester5'){echo "selected"; }>Semester 5</option>
                                    <option value="semester6" <?php if( $agamaDariDatabase=='semester6'){echo "selected"; }>Semester 6</option>
                                                
                        </select>

                        </div> 
                 
                      
                      <div class="form-group">        
                      <label class="form-label">Nilai Bahasa Indonesia</label>
                      <input type="number" min="0" max="100" name="bindo" class="form-control" value="<?php echo $data['bindo'] ?>" placeholder="Masukkan Nilai Bahasa Indonesia (Numeric 0-100)" required="required"/>
                      </div>
                      
                      <div class="form-group">        
                      <label class="form-label">Nilai Bahasa Inggris</label>
                      <input type="number" min="0" max="100" name="binggris" class="form-control" value="<?php echo $data['binggris'] ?>" placeholder="Masukkan Nilai Bahasa Inggris (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Matematika</label>
                      <input type="number" min="0" value="<?php echo $data['matematika'] ?>" max="100" name="matematika" class="form-control" placeholder="Masukkan Nilai Matematika (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Sejarah</label>
                      <input type="number" min="0" max="100" value="<?php echo $data['sejarah'] ?>" name="sejarah" class="form-control" placeholder="Masukkan Nilai Sejarah (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai PKN</label>
                      <input type="number" min="0" max="100" name="pkn" class="form-control" value="<?php echo $data['pkn'] ?>" placeholder="Masukkan Nilai PKN (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Fisika</label>
                      <input type="number" min="0" max="100" name="fisika" class="form-control" value="<?php echo $data['fisika'] ?>" placeholder="Masukkan Nilai Fisika (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Pemrograman Berorientasi Objek</label>
                      <input type="number" min="0" max="100" name="pbo" class="form-control" value="<?php echo $data['pbo'] ?>" placeholder="Masukkan Nilai Pemrograman Berorientasi Objek (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">Nilai Basis Data</label>
                      <input type="number" min="0" max="100" name="basisdata" class="form-control" value="<?php echo $data['basisdata'] ?>" placeholder="Masukkan Nilai Basis Data (Numeric 0-100)" required="required"/>
                      </div>

                      <div class="form-group">
                      <input type="submit" name="fsubmit" class="btn btn-primary btn-lg"/>
                      </div> 
                   
                    
        
                   
                    
                  </table>
                  </div>
                  
              
                
                </div>
    </div>

    </form>
    </div>
  </div>
  <?php
                include '../koneksi.php';
                if(isset($_POST['fsubmit'])){
                
              
                $bindo = $_POST['bindo'];
                $binggris = $_POST['binggris'];
                $matematika = $_POST['matematika'];
                $sejarah = $_POST['sejarah'];
                $pkn = $_POST['pkn'];
                $fisika = $_POST['fisika'];
                $pbo = $_POST['pbo'];
                $basisdata = $_POST['basisdata'];
                $semester = $_POST['semester']
                $avg = ($bindo + $binggris + $matematika + $sejarah+ $pkn + $fisika + $pbo + $basisdata) / 8;

                $q = "UPDATE `arkademy`.`tbl_raport` SET `semester` = '$semester', `bindo` = '$bindo', `binggris` = '$binggris', `matematika` = '$matematika', `sejarah` = '$sejarah', `pkn` = '$pkn', `fisika` = '$fisika', `pbo` = '$pbo', `basisdata` = '$basisdata', `avg` = '$avg' WHERE `tbl_raport`.`id_mapelrpl` = $id";

                mysql_query($q);
                
                echo "<script>window.alert('Update Data Success !');
                window.location='nilai.php'</script>";

                }
                
                ?>


 <?php else: header('location:nilai.php'); ?>

 <?php endif; ?>