<?php 
include '../koneksi.php';
$keyword = $_GET['keyword'];

 ?>
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
               $awaldata=($jumlahdata_per_page * $aktif) -$jumlahdata_per_page;
              
               // End Pagination Logic

                $query = mysql_query("SELECT * FROM pengumuman JOIN users ON pengumuman.id_user = users.id_user WHERE judul LIKE '%$keyword%' LIMIT $awaldata, $jumlahdata_per_page");
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
                            <span class="media-meta pull-right"><a href="../<?php echo $row['file']; ?>">Download File <i class="fas fa-file-download"></i></a></span>
                        </div>
                      </div>
                    </td>
                  </tr>
               <?php } ?>

                </tbody>

              </table>
              </div>

 

              </table>
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