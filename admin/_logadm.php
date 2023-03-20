<?php
session_start();

include "../conection.php";

$username = $_POST["username"];
$pass = $_POST["password"];

$sql = "SELECT * FROM dashboard_admin WHERE username = '".$username."' AND password = '".$pass."' LIMIT 1";
$res = mysqli_query($conn, $sql);
$jumlah = mysqli_num_rows($res);


	if ($jumlah > 0) {
		$row = mysqli_fetch_assoc($res);
		$_SESSION["id"]=$row["id"];
		$_SESSION["username"]=$row["username"];
		$_SESSION["password"]=$row["password"];

		header("Location:viewEdit.php");
	}else {
		echo "Email atau Password salah <br><a href='login.php'>Kembali</a>";
	}	
?>