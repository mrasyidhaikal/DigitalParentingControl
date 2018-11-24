<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 

</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">pro sidebar</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/bootstrap4/assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon
                            <strong>Smith</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-pill badge-danger">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Dashboard 1
                                            <span class="badge badge-pill badge-success">Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Dashboard 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>E-commerce</span>
                                <span class="badge badge-pill badge-primary">3</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Products

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">Orders</a>
                                    </li>
                                    <li>
                                        <a href="#">Credit cart</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span>Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">General</a>
                                    </li>
                                    <li>
                                        <a href="#">Panels</a>
                                    </li>
                                    <li>
                                        <a href="#">Tables</a>
                                    </li>
                                    <li>
                                        <a href="#">Icons</a>
                                    </li>
                                    <li>
                                        <a href="#">Forms</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span>Charts</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Pie chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Line chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Bar chart</a>
                                    </li>
                                    <li>
                                        <a href="#">Histogram</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span>Maps</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">Google maps</a>
                                    </li>
                                    <li>
                                        <a href="#">Open street map</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                <a href="#">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                      <?php  
if(isset($_GET['destroy'])) :
  session_start() ;
   unset($_SESSION['produk']);
endif;
if(isset($_GET['delete'])) :
  session_start();
  $id = $_GET['delete'];
unset($_SESSION['produk'][$id]);
endif;
   ?>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="../logo.png" alt="" width="72" height="72">
        <h2>Data Pembeli</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>

            <div class="col-md-8 order-md-2 col-md-offset-2">
      
          <form class="needs-validation" method="get" action="index.php">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="firstName">Judul Buku</label>
                <select type="text" class="form-control" name="id_buku" value="" required>
                 
              <?php 
              include '../koneksi.php';
          $q=mysql_query("SELECT * FROM `tb_buku`");
          while ($dis = mysql_fetch_assoc($q)) {
            echo '<option value="'.$dis['id_buku'].'" >'.$dis['judul'].'</option>';
          }   
         ?>
        
                </select>
              
              </div>
              <div class="col-md-4 mb-3">
                <label for="lastName">Jumlah</label>
                <input type="number" class="form-control" id="lastName" placeholder="" name="jumlah" value="" required>
                
              </div>
              
                <div class="col-md-2">
                  <label></label>
                <button class="btn btn-primary btn-lg" type="submit" name="masuk">Masukkan</button>
              </div>
          </form>
              </div>
</div>
<?php  

if (isset($_GET['masuk'])) {
  session_start() ;
    $id_buku  = $_GET['id_buku'];
    $jumlah = $_GET ['jumlah'];

    $dd = mysql_query("SELECT * FROM tb_buku WHERE id_buku = $id_buku ");
    $row = mysql_fetch_array($dd);
    
      $_SESSION['produk'][$id_buku] = array(
       
        'id' => $row['id_buku'],
        'judul' => $row['judul'],
        'foto' => $row['foto'],
         'jumlah' => $jumlah,
        'hargaj' => $row['hargaj'],
      
      );

}
 
 ?>
               <div class="container">

  <div class="row">
    
        
        <div class="col-md-12">
          <br>
        <h4>Pembelian</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th >Foto Buku</th>
                   <th>Kode Buku</th>
                    <th>Nama Buku</th>
                     <th>Jumlah</th>
                     <th>Harga</th>
                     <th>Subtotal</th>
                      <th>Action</th>  
                       
                   </thead>
    <tbody>
    
<?php 
include '../koneksi.php';
  if(empty($_SESSION['produk'])) :

  else :

  foreach($_SESSION['produk'] as $items => $riw) : 
  $subtotal = $riw['hargaj'] * $riw['jumlah'];
  $total += $subtotal;

  ?>
       <td><img width="100" src="../<?php echo $riw['foto']; ?>" class="img-responsive"></td>
      <td><?php echo $riw['id']; ?></td>
      <td><?php echo $riw['judul']; ?></td>
      <td><?php echo $riw['jumlah'] ?></td>
      <td><?php echo number_format($riw['hargaj']) ?></td>
      <td><?php echo number_format($subtotal); ?></td>
      <td> 
       <a class="btn btn-danger" href="index.php?delete=<?php echo $riw['id'] ?>"><i class="fa fa-trash"></i> Delete</a> </td>
    </tr> 
<?php  endforeach;  endif; ?>


    <tr>
      <a href="index.php?destroy" class="tombol">Batalkan Transaksi</a>
      <tr>
      <td colspan="5"><span class="pull-right">Total :</span></td>
      <td style="background-color: #b2bec3;color:#111;"><?php echo (empty($_SESSION['produk'])) ? '' : $total ?></td>
      <td colspan="2"></td>
    </tr>
    </tr>
  </tbody></table></div>

            </div>

           
<div class="col-md-8 order-md-2 col-md-offset-3">
      
          <form class="needs-validation" method="GET" action="printk.php">
            <div class="row">
             <div class="col-md-4 mb-3">

              <input type="hidden" class="form-control" id="lastName" placeholder="" name="hasil" value="<?php echo (empty($_SESSION['produk'])) ? '' : number_format($total) ?>" required>
                

                <label for="lastName">Email</label>
                <input type="email" class="form-control" id="lastName" placeholder="" name="email" value="" required>
                 
              </div>
                <div class="col-md-4 mb-3">

      
                

                <label for="lastName">Nama Pembeli</label>
                <input type="text" class="form-control" id="lastName" placeholder="" name="nama" value="" required>
                 
              </div>
              <div class="col-md-4 mb-3">
                <br>
                <button class="btn btn-primary btn-lg" type="submit" name="bayar">Bayar</button>
              </div>      
                     
                
             
          </form>
              </div>
</div>
            
       
          
       
            
            
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

              <hr> 
             
                    </div>
                </div>
            </div>
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

</html>