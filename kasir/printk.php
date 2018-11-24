<?php 
 	include '../koneksi.php';
 	$email = $_GET['email'];
 	$nama = $_GET['nama'];
   $date = date("Y-m-d");
 	$id = uniqid();

session_start();
 $query=$_SESSION['produk'];
$total = $_GET['hasil'];
    foreach($query as $items => $row) {
       $judul = $row['judul'];
       $jumlah= $row['jumlah'];
       $hargaj = $row['hargaj'];
       $idbuku= $row['id'];
$pasok =  mysql_query("SELECT id_pasok FROM tb_pasok WHERE id_buku = $idbuku");
$data = mysql_fetch_array($pasok);
$idpasok = $data['id_pasok'];
$laku = mysql_query("INSERT INTO `db_kasir`.`tb_laku` (`id_penjualan`, `id_buku`, `id_pasok`, `jumlah`, `hargaj`, `judul`) VALUES ('$id', '$idbuku', '$idpasok', '$jumlah', '$hargaj', '$judul')");
       
}

$content=' 
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
  table th{
    padding-left:70px;padding-right:70px;
    font-size:22px;
  }
  table td{
    font-size:18px;
  }
</style>
    '

    ;
 $content .= '<page>
<html>
<body>
<div id="invoice">

 
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
           
            <div class="main">

                <div class="row contacts">

                    <div class="col invoice-to">
    
                    <div class="col">
                       
                            <img src="../logo.png" style="width:200px;margin-left:350px;" />
                          
                    </div>
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">'.$nama.'</h2>
                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                        <div class="email"><a href="mailto:john@example.com">'.$email.'</a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE 3-2-1</h1>
                        <div class="date">Date of Invoice: 01/10/2018</div>
                        <div class="date">Due Date: 30/10/2018</div>
                    </div>
                </div>

                     
                <table border="0" cellspacing="200px">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th class="text-left">Nama Buku</th>
                            <th class="text-right">Jumlah</th>
                             <th class="text-right">Harga</th>
                            <th class="text-right">Total</th>
                        </tr>

                    </thead>
                              ';

 $query=$_SESSION['produk'];
$total = $_GET['hasil'];


    foreach($query as $items => $row) {
        $subtotal = $row['hargaj'] * $row['jumlah'];

       
 $content .='
                    <tr>
                    <td class="unit"><img style="width:80px;" src=../'.$row['foto'].' > </td>                        <td class="unit">'.$row['judul'].'</td>
                        <td class="unit">'.$row['jumlah'].'</td>  
                        <td class="unit">'.$row['hargaj'].'</td> 
                    
                        <td class="total">'.$subtotal.'</td>   
                    </tr>

              ';
            }
        $content .='
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2" class="unit" >TOTAL</td>
                            <td class="text-center semua">'.$total.'</td>

                        </tr>
                       
                 
                </table>
                <div class="thanks">Thank you!</div>
               
            </div>
            <div class="footer">
                Invoice was created on a computer and is valid without the signature and seal.
            </div>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>

     ';


 $content .='
 </body>
</html>
</page>';
    require_once('../html2pdf/html2pdf.class.php');

      $baru = uniqid();
      $eks = '.pdf';
      $path="../pdf/".$baru.$eks;


    $html2pdf = new HTML2PDF('L','A4','en');
    $html2pdf ->WriteHTML($content);
    $html2pdf ->Output($path , 'F');



    // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
     $mail->addAttachment($path);         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Body    = '<b>MAIL PDF</b>';
    $mail->AltBody = 'haiii';

    $mail->send();
    $beli = mysql_query("INSERT INTO `db_kasir`.`tb_penjualan` (`id_penjualan`, `id_kasir`, `nama_pembeli`, `email_pembeli`, `tanggal`, `pdf`) VALUES ('$id', '1', '$nama', '$email', '$date', '$path')")
   
    echo 'Message has been sent';

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
 ?>
