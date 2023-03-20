<?php
    include '../conection.php';

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,100&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="https://freepngimg.com/download/starbucks/24210-2-starbucks-logo-image.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Home</title>
</head>
<body>
    <header>
        <div class="navbar w-75">
            <img src="../assets/logo.png" alt="logo.png" class="logo" />
            <nav>
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <div class="container w-75 my-5">
		<h3 class="mb-5">DASHBOARD PENGELOLA USER</h3>
		<div class="card">
			<div class="card-header bg-success text-white"><i class="fa fa-user ms-2"></i><span class=" fw-bold ps-2">USER</span></div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Email</th>
							<th>Nama</th>
							<th>Password</th>
							<th>Jenis Kelamin</th>
                            <th>Alamat</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $no = 1;

                            while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td class="d-flex flex-row gap-2">
                                <a href="editUsers.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="_delUser.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                        <?php $no++; }?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
    </main>

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