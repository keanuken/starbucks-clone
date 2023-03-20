<?php
    include "../conection.php";

    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE users set email = '$email',
    name = '$name',
    password = '$password',
    gender = '$gender',
    alamat = '$alamat' WHERE id = '$id'";

    mysqli_query($conn, $query);
    echo "Error :  " . mysqli_error($conn);

    header("location: viewEdit.php");
    die();
?>