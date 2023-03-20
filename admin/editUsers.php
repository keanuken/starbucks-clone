<?php
    include '../conection.php';

    $id = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = '$id'";

    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <header>
        <header>
        <div class="navbar w-75">
            <img src="../assets/logo.png" alt="logo.png" class="logo" />
            <nav>
                <ul>
                    <li><a href="/index.html">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    </header>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <div class="container w-75 mt-3">
        <a class=" btn btn-primary my-4" type="submit" href="viewEdit.php">Kembali</a>
        <h1>Edit Mahasiswa</h1>
        <form class="row g-3" action="_actEdit.php" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control editID" value="<?php echo $row['id'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="col-sm-6">
                    <input type="text" name="password" id="password" class="form-control" value="<?php echo $row['password'] ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <div class="col-sm-6">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Pria" id="flexRadioDefault1">
                        <label for="flexRadioDefault1" class="form-check-label">Pria</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Wanita" id="flexRadioDefault2">
                        <label for="flexRadioDefault2" class="form-check-label">Wanita</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $row['alamat'] ?>">
                </div>
            </div>
            <div class="container d-flex mt-2">
                <div>
                    <button class=" btn btn-primary" type="submit">Simpan</button>
                </div>
                <div class="ms-4">
                    <a class=" btn btn-primary" role="button" href="viewEdit.php">Lihat Data</a>
                </div>
            </div>
        </form>
        <?php endwhile; ?>
    </div>
    <!-- Footer -->
    <footer>
        <div id="footer-content">
            <h3>Starbucks Clone</h3>
            <p>
                NRP 162020003 Keanu Jaler Pangestu Sistem Informasi Fakultas Teknologi
                Industri ITENAS 2020.
            </p>
            <ul class="sosmed">
                <li>
                    <a href="https://github.com/keanuken/"><i class="fa fa-github-alt"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/keanuken_/"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="mailto:keanujalerr.kj@gmail.com"><i class="fa fa-envelope"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 Keanu JP. Dev by <span>Keanu JP</span></p>
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
</body>

</html>