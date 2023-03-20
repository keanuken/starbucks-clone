<?php 
    include "../conection.php";

    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id='$id'";
    mysqli_query($conn, $query);

    header("location: viewEdit.php");
    die();
?>