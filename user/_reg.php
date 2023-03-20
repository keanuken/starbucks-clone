<?php   
    session_start();
    include "../conection.php";

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO users VALUES(null,'$email', '$nama', '$password', '$gender', '$alamat')";
    mysqli_query($conn, $query);

    header('location:/index.html');
    die();
?>
?>