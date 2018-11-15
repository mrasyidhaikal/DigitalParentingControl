<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="font/css/all.css">
<?php
session_start();
$level = $_SESSION['level'];
if ($level == 'parent') {
    header('location:parent');
}
elseif ($level == 'guru') {
    header('location:guru');
}



?>
</head>
<body style="background-color:#2f3542;">
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3" style="margin-top:50px; ">
		
	<div class="panel panel-login">
		<div class="panel-body">
		<div class="row">
		<div class="col-sm-6 col-sm-offset-4 col-xs-4 col-xs-offset-4">
			<img src="img/mhs.png" class="img-responsive text-center" width="100px;">
		</div>
		</div>
		<h2 style="color:#182C61;">LOGIN</h2>
	<div class="row">
		<div class="col-sm-10">
			<form method="POST" action="">
				<div class="form-group">
					<label><i class="fa fa-user"></i> Username</label>
					<input type="text" name="user" class="form-control" placeholder="Username" required="" style="color:#f5642d;">
				</div>
					<div class="form-group">
					<label><i class="fa fa-lock"></i> Password</label>
					<input type="Password" name="pass" required="" class="form-control" placeholder="Password" style="color:#f5642d;">
				</div>
						</div>
					<div class="col-sm-1">
				<div class="form-group">
					<button type="submit" class="btn btn-primary log" name="login"><i class="fa fa-lock-open fa-2x"></i> </button>
				</div>
</div>
			</form>
	</div>
		</div>
			</div>
	</div>
</div>
</div>
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		

		<ul class="list-inline text-center">
			<li class=""><button class="btn btn-default"><i class="fab fa-google"> Google</button></i></li>
			<li class=""><button class="btn btn-default"><i class="fab fa-facebook"> Facebook</button></i></li>
			<li class=""><button class="btn btn-default"><i class="fab fa-twitter"> Twiiter</button></i></li>

		</ul>
</div>
</div></div>
<div class="row">
	<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		


</div>
</div></div>

</body>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<?php 

if (isset($_POST['login'])) {

include 'koneksi.php';
session_start();

$us=$_POST['user'];
$pas=$_POST['pass'];
$data=mysql_fetch_array(mysql_query("SELECT * FROM `users` WHERE username='$us' AND password='$pas'"));
$username=$data['username'];
$password=$data['password'];
$level=$data['level'];
$id=$data['id_user'];


$data2=mysql_fetch_array(mysql_query("SELECT * FROM `tbl_siswa` WHERE id_user='$id'"));
$id_siswa = $data2['id_siswa'];

if ($us==$username && $pas==$password) {
	if ($level=='parent') {
		$_SESSION['level']=$level;
		$_SESSION['id_user']=$id;
		$_SESSION['id_siswa']=$id_siswa;
		$_SESSION['username']=$username;

		echo "<script>window.alert('Selamat Datang $username');
			window.location='parent/'</script>";
	}
	elseif ($level=='guru') {
	$_SESSION['level']=$level;
	$_SESSION['username']=$username;
	$_SESSION['id_user']=$id;
	echo "<script>window.alert('Selamat Datang $username');
			window.location='guru/'</script>";
	}
	elseif ($level=='admin') {
		$_SESSION['level']=$level;
		$_SESSION['id_user']=$id;
		$_SESSION['username']=$username;
		echo "<script>window.alert('Selamat Datang $username');
			window.location='admin/index.php'</script>";
	}

}
else{
	echo "<script>window.alert('Login Gagal');</script>";
}
}
 ?>
</html>
