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
          <a href="siswa.php">
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Siswa">
            <div class="c-menu__item__inner"><i class="fa fa-users"></i>
              <div class="c-menu-item__title"><span>Siswa</span></div>
            </div>
          </li>
          </a>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Absensi">
            <div class="c-menu__item__inner"><i class="fas fa-calendar-alt"></i>
              <div class="c-menu-item__title"><span>Absensi</span></div>
            </div>
          </li>
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
  
       <form method="post" action="" enctype="multipart/form-data" role="form" class="col-md-10 go-right">
      <h2><i class="fas fa-users"></i>Registrasi Akun</h2>


  <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA</div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-10" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
           
      
 
      
           
            
                      <div class="form-group">        
                      <label class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" placeholder="Username" required="required"/>
                      </div>     

                      <div class="form-group">        
                      <label class="form-label">Password</label>
                      <input type="password" name="pass" class="form-control"  required="required"/>
                      </div>  
                      <div class="form-group">        
                      <label class="form-label">Confirm Password</label>
                      <input type="password" name="pass2" class="form-control"  required="required"/>
                      </div>
                     <div class="form-group">
                       <label class="form-label">Level</label>
                       <select name="level" class="form-control">
                         <option value="guru">Guru</option>
                         <option value="parent">Parent</option>
                         <option value="admin">Admin</option>
                       </select>
                     </div>

                      <div class="form-group">        
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required"/>
                      </div>

                      <div class="form-group">        
                      <label class="form-label">No Hp</label>
                      <input type="tel" name="nohp" class="form-control" placeholder="No Hp" required="required"/>
                      </div>
                      <div class="form-group">        
                      <label class="form-label">Foto</label>
                      <input type="file" name="foto" class="form-control" placeholder="No Hp" required="required"/>
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
    $username = $_POST['username'];
    $pass  = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $id = uniqid();
    $level = $_POST['level'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $tanggal = date("Y-m-d h:i:s");
                  
    $fl_name=$_FILES['foto']['name'];
    $tmp=$_FILES['foto']['tmp_name'];

    // Validasi
    $ekstensi=['jpeg','png','jpg','gif'];
    $nama = explode('.', $fl_name);
    $nama=strtolower(end($nama));
    if (!in_array($nama, $ekstensi)) {
      echo "<script>window.alert('File Tidak Cocok');
  window.location='akun.php'</script>";
    }
    elseif ($pass != $pass2) {
    echo "<script>window.alert('Password Tidak Sama');
  window.location='akun.php'</script>";    }
    else{
       $baru = uniqid();
                $baru .='.';
                $baru .=$nama;

                $path="../parent/foto/".$baru;
               
                move_uploaded_file($tmp, $path);
      $query =mysql_query("INSERT INTO `arkademy`.`users` (`id_user`, `username`, `password`, `level`, `foto`, `email`, `nohp`) VALUES ('$id', '$username', '$pass', '$level', '$path', '$email', '$nohp')").mysql_error();
      echo "<script>window.alert('Input Success');
  window.location='akun.php'</script>";

    }


  }
 ?>
                  
  <div class="container"> 
    <table id="tabel" class="table table-striped table-bordered" width="100%" cellspacing="0">

    <thead>
        <tr>
            <th>Foto</th>
            <th>Id User</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            
            <th>Email</th>
            <th>No Hp</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
          <?php 
      include '../koneksi.php';
      $q = mysql_query("SELECT * FROM users");
      while ($row = mysql_fetch_array($q)) {
    
     ?>
        <tr>
           <td><img width="100px" src="../parent/<?php echo $row['foto']; ?>"> </td>
            <td><?php echo $row['id_user']; ?></td>
            <td><?php echo $row['username']; ?></td>
           
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['level']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['nohp']; ?></td>
           <td><a href="akun.php?delete=<?php echo $row['id_user']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
           <a href="editakun.php?update=<?php echo $row['id_user']; ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
           <br>
           <br>
           <center>
           <a href="editfoto.php?update=<?php echo $row['id_user']; ?>" class="btn btn-primary"><i class="fa fa-image"></i> Edit Foto</a>
           </center>
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
 $hapus = mysql_query("DELETE FROM `arkademy`.`users` WHERE `users`.`id_user` = '$id'");
  echo "<script>window.alert('Delete Success');
  window.location='akun.php'</script>";
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