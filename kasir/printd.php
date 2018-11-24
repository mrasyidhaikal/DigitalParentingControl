<?php 
 	include '../koneksi.php';
$content='  
<link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">	'

 	;
 $content .= '<page>

 	 


    ';


	

	}
	
 $content .='
 </table> </page>';
	require_once('../html2pdf/html2pdf.class.php');
	$html2pdf = new HTML2PDF('P','A4','en');
	$html2pdf ->WriteHTML($content);
	$html2pdf ->Output();
 ?>
