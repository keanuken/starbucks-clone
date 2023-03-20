<head>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<?php
session_start();

include "../conection.php";

$email = $_POST["email"];
$pass = $_POST["password"];

$sql = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pass."' LIMIT 1";
$res = mysqli_query ($conn, $sql);
$jumlah = mysqli_num_rows($res);


	if ($jumlah > 0) {
		$row = mysqli_fetch_assoc($res);
		$_SESSION["id"]=$row["id"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["name"]=$row["name"];
		$_SESSION["password"]=$row["password"];
		$_SESSION["gender"]=$row["gender"];
		$_SESSION["alamat"]=$row["alamat"];

		header("Location:../index.html");
	}else {
		echo "Email atau Password salah <br><a href='login.php'>Kembali</a>";
	}	
?>