<?php include '../koneksi.php';   
    if (isset($_POST['cari'])) {

      $tanggal = $_POST['tanggal'];
      $kelas = $_POST['kelas'];

      $no = 1;
      $data = mysql_query("select * from absensi where tanggal ='$tanggal' and kelas='$kelas'");
        
      if (mysql_num_rows($data)) {
       if (isset($tanggal)) {
              
        while($d = mysql_fetch_array($data))
        {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['tanggal']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['sakit']; ?></td>
            <td><?php echo $d['alfa']; ?></td>
            <td><?php echo $d['hadir']; ?></td>
            <td><?php echo $d['keterangan']; ?></td>
          </tr>
          <?php 
        }
      
      }

      }
      else
      {

      $no = 1;

      $data = mysql_query("select * from siswa");

       while($d = mysql_fetch_array($data))
        {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $tanggal ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><input type="radio" name="absen" value="sakit"></td>
            <td><input type="radio" name="absen" value="izin"></td>
            <td><input type="radio" name="absen" value="alfa"></td>
            <td><input type="radio" name="absen" value="hadir"></td>
            <td><input type="text" name="keterangan" value=""></td>
          </tr>
          <?php 
        }
      
       
      }
      }   

    ?>