<?php 
include '../koneksi.php';
    $judul = $_POST['judul'];
    $isi  = $_POST['isi'];
    $tanggal = date("Y-m-d h:i:s");
                  
    $fl_name=$_FILES['ddf']['name'];
    $tmp=$_FILES['ddf']['tmp_name'];

    // Validasi
    $ekstensi=['doc','pdf','jpg','jpeg','png'];
    $nama = explode('.', $fl_name);
    $nama=strtolower(end($nama));
    if (!in_array($nama, $ekstensi)) {
    
    }
    else{
       $baru = uniqid();
                $baru .='.';
                $baru .=$nama;

                $path="../file/".$baru;
                $nama="file/".$baru;
                move_uploaded_file($tmp, $path);
      $query =mysql_query("INSERT INTO `arkademy`.`pengumuman` (`id_pengumuman`, `judul`, `file`, `isi`, `tanggal`) VALUES (NULL, '$judul', '$nama', '$isi', '$tanggal');").mysql_error();
    

    }

 ?>