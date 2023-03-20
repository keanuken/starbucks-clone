<?php
    $host="localhost:3306";
    $user="root";
    $password="keanu647090";
    $db="sbuxclone";

    $conn = mysqli_connect($host,$user,$password,$db);
    if (!$conn){
        die("Koneksi gagal:".mysqli_connect_error());
    }
?>