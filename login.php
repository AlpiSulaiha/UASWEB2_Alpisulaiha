<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "akademik");
?>

<?php
if(isset($_POST['login'])){
	$ambil = $koneksi->query("SELECT * FROM user WHERE username='$_POST[user]' AND password='$_POST[pass]'");
	$yangcocok = $ambil->num_rows;

	if($yangcocok == 1){
		$_SESSION['username'] = $ambil->fetch_assoc();
		echo "<div class='alert alert-info'>Login sukses</div>";
		echo "<meta http-equiv='refresh' content='1;url=input-mahasiswa.php'>";
	}
	else{
		echo "<div class='alert alert-danger'>Login gagal!</div>";
		echo "<meta http-equiv='refresh' content='1;url=login.php'>";
	}
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="assets/js/jquery-1.10.2.js"></script>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login Alpi</title>

	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/custom.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>

</head>
<body>
	<div class="container">
		<div class="row text-center ">
			<div class="col-md-12">
				<br /><br />
				<h3>Pendataan Mahasiswa ITB Indonesia</h3>
				
				<h5>Akses Login Mahasiswa</h5>
				<br />
			</div>
		</div>
		<div class="row ">
						
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong	strong> Login Mahasiswa </strong>  
		</div>
<div class="panel-body">
	<form role="form" method="post"><br />
<div class="form-group input-group">
	<span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
	<input type="text" class="form-control" name="user" />
</div>
<div class="form-group input-group">
	<span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
	<input type="password" class="form-control"  name="pass" />
</div>

<span class="pull-left">
	<button class="btn btn-primary" name="login">Login</button> 
<button type="reset" class="btn btn-danger">Kosongkan</button>
</span>
						</div>		
					</form>
				</div>
			</div>
		</div>			
	</div>
</div>

	<script src="assets/js/jquery-1.10.2.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.metisMenu.js"></script>
	<script src="assets/js/custom.js"></script>
   
</body>
</html>
