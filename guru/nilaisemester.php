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
          <a href="pilihnilai.php">
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
     <h2><i class="fas fa-file-invoice"></i> Nilai Murid (per Semester)</h2>

<div class="row">
<div class="col-md-4">
  <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA </div>
  </div></div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-10" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
           
            
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

                        <label class="form-label">Semester</label>

                        <select name="semester" id="select" class="form-control" >
                            <option value="" disabled selected>Pilih Semester</option>

                                    <option value="semester1">Semester 1</option>
                                    <option value="semester2">Semester 2</option>
                                    <option value="semester3">Semester 3</option>
                                    <option value="semester4">Semester 4</option>
                                    <option value="semester5">Semester 5</option>
                                    <option value="semester6">Semester 6</option>
                                                
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
                  </form>
                  </div>
                  
              
                
                </div>
    </div>
    </form>
    </div>
  </div>

  <?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

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
                $semester = $_POST['semester'];
                $avg = ($bindo + $binggris + $matematika + $sejarah+ $pkn + $fisika + $pbo + $basisdata) / 8;

                $q = "INSERT INTO `tbl_raport` 
                (`id_siswa`, `semester`, `bindo`, `binggris`, `matematika`, `sejarah`, `pkn`, `fisika`, `pbo`, `basisdata`,`avg`) 
                VALUES 
                ('$id_siswa', '$semester', '$bindo', '$binggris', '$matematika', '$sejarah', '$pkn', '$fisika', '$pbo', '$basisdata','$avg')";

                mysql_query($q);
                
                $id_siswa = $_POST['id_siswa'];
                $ambiluser = mysql_query("SELECT * from tbl_siswa where id_siswa = '$id_siswa' ");
                $q1 = mysql_fetch_array($ambiluser);
                $id_user = $q1['id_user'];
                $query = mysql_query("SELECT * FROM users WHERE id_user = '$id_user' ");
      while($data = mysql_fetch_array($query)){
    $email = $data['email'];    

  
//Load Composer's autoloader

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
    
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mrasyid.haikal@gmail.com';                 // SMTP username
    $mail->Password = '511243wow';                           // SMTP password
    // $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mrasyid.haikal@gmail.com', '');
    $mail->addAddress($email);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    //  $mail->addAttachment($path);         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $id_userr =$_SESSION['id_user'];
    $guru =mysql_fetch_array(mysql_query("SELECT * FROM users WHERE id_user = '$id_userr' "));
    $namaguru = $guru['username'];
    $judul2 ="Notifikasi Pengumuman Tentang ".$judul;
    $isi2 = "Haloo Saya ".$namaguru." (Admin Digital Parenting Control) , 
     Nilai Semester Telah di Input , 
     Silahkan di Cek di https://multistudi.sch.id/parent/nilaisemester ".$isi;
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $judul2;
    $mail->Body    = $isi2;
    $mail->AltBody = 'haiii';

    $mail->send();
   
   
    echo "<script>window.alert('Pesan Terkrim');
    window.location='nilaisemester.php'</script>";

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
      }





                }
                
                
                ?>



                  
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>Semester</th>
            <th>ID Siswa</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>Sejarah</th>
            <th>PKN</th>
            <th>Fisika</th>
            <th>PBO</th>
            <th>Basis Data</th>
            <th>Average</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
           <?php 
    include '../koneksi.php';
    
    $query = mysql_query("SELECT * FROM tbl_raport");
    while($row = mysql_fetch_array($query)){
      $panggilnama = $row['id_siswa'];
      $querynama = mysql_query("SELECT nama_siswa from tbl_siswa where id_siswa = $panggilnama");
      $row2 = mysql_fetch_array($querynama);

    ?>
        <tr>
             <td><?php echo $row['semester']; ?></td>
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
            <td><a href="nilaisemester.php?delete=<?php echo $row['id_raport']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
              <a href="editnilaisemester.php?update=<?php echo $row['id_raport']; ?>" class="btn btn-primary">  <i class="fa fa-edit"></i></a>
            </td>
        </tr>
        <?php } ?>
</div>
  </div>   
</main>
<?php
if (isset($_GET['delete'])){

  $id = $_GET['delete'];
  $query = mysql_query("DELETE FROM `tbl_raport` WHERE `tbl_raport`.`id_raport` = $id");

  if ($query) {
    ?>
    <script type="text/javascript">
      document.location.href='nilaisemester.php';
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

</body></html>