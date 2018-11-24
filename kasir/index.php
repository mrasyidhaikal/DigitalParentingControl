
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
