<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
      <script src="js/jsmanual.js"></script>
      <link rel="stylesheet" type="text/css" href="style1.css">
      <script type="text/javascript" src="jquery/jquery.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
    $(".tampil").click(function(){
        $(".sembunyi").slideToggle();
    });
   
});
      </script>
</head>
<body>
<?php 
include 'side.php';
 ?>


        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Pasok
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
            <div class="tampil" ><i class="fas fa-plus"></i> TAMBAH DATA</div>
  
  <div class="sembunyi">
    <div class="row">
      <div class="col-sm-6" style="margin-left: 10px;">
        
      
    <table border="0" cellspacing="0" cellpadding="10" align="center" width="100%" style="padding: 5px;">
                 <tr>
      
          <input type="hidden" name="action" id="action" value="save" />
          </tr>
          <form method="post" action="">
                    
                      <div class="form-group">        
                      <label>Id Pasok</label>
                      <input type="text" name="id_pasok" class="form-control"   required="required"/>
                      </div>
                      <div class="form-group">        
                      <label>Id Distributor</label>
                    <select name="id_distributor" class="form-control">
              <?php 
              include '../koneksi.php';
          $q=mysql_query("SELECT * FROM `tb_distributor`");
          while ($dis = mysql_fetch_assoc($q)) {
            echo '<option>'.$dis['id_distributor'].'</option>';
          }   
         ?>
          </select>
                      </div>
                      <div class="form-group">        
                      <label>Id Buku</label>
                      <select name="id_buku" class="form-control">
              <?php 
              include '../koneksi.php';
          $q=mysql_query("SELECT * FROM `tb_buku`");
          while ($buk = mysql_fetch_assoc($q)) {
            echo '<option>'.$buk['id_buku'].'</option>';
          }   
         ?>
          </select>
                       <div class="form-group">        
                      <label>Jumlah</label>
                      <input type="number" name="jumlah" class="form-control"   required="required"/>
                      </div>
                       <div class="form-group">        
                      <label>Tanggal</label>
                      <input type="date" name="tanggal" class="form-control"   required="required"/>
                      </div>
                      <input type="submit" name="sim"  required="required" class="btn btn-primary" />
                    
                  </table>
                  </div>
                  
              
                </form>
                </div>
    </div>

    <?php 
    if (isset($_POST['sim'])) {
      include '../koneksi.php';
      $id_pasok=$_POST['id_pasok'];
      $id_distributor=$_POST['id_distributor'];
      $id_buku=$_POST['id_buku'];
      $jumlah=$_POST['jumlah'];
      $tanggal=$_POST['tanggal'];
       $simpan =mysql_query("INSERT INTO `tb_pasok` (`id_pasok`, `id_distributor`, `id_buku`, `jumlah`, `tanggal`) VALUES ('$id_pasok', '$id_distributor', '$id_buku', '$jumlah', '$tanggal')");
      if ($simpan) {
         echo "<script>
                window.alert('Successs')
                window.location='pasok.php'</script>";
      }
      else{
         echo "<script>
                window.alert('Gagal')
                window.location='pasok.php'</script>";
      }
    
    }
     ?>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table Barang<br>
                                <a href="printpasok.php" class="btn btn-primary"><i class="fa fa-print"> Print</i></a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Pasok</th>
                                            <th>ID Distributor</th>
                                            <th>ID Buku</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>
                                              Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                    include '../koneksi.php';
                                    $query=mysql_query("SELECT * FROM tb_pasok");
                                    while ($data = mysql_fetch_array($query)) {
                                        
                                    
                                     ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['id_pasok']; ?></td>
                                            <td><?php echo $data['id_distributor']; ?></td>
                                            <td><?php echo $data['id_buku']; ?></td>
                                            <td><?php echo $data['jumlah']; ?></td>
                                          
                                            <td><?php echo $data['tanggal']; ?></td>
                                            <td><a href="deletepasok.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                     <a href="editp.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                     <a href="printpasokid.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-primary"><i class="fa fa-print"></i></a>
                                   </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">Haikal</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
