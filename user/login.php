<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,100&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/user.css">
    <link rel="shortcut icon" href="https://freepngimg.com/download/starbucks/24210-2-starbucks-logo-image.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Starbucks Clone</title>
</head>

<body>
    <header>
        <div class="navbar">
            <img src="/assets/logo.png" alt="logo.png" class="logo" />
            <nav>
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/user/register.php">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <form action="_log.php" method="post">
            <div class="container-form mt-5">
                <div class="row">
                    <div class="col hero">
                        <img src="/assets/logo.png" class="pb-3">
                        <h1 class="mb-3 title fw-bold fs-1">Login User</h1>
                        <p>Selamat datang di website Starbucks Clone, silahkan login terlebih dahulu.
                        </p>
                    </div>

                    <div class="col d-none d-sm-block mt-4 input-group">
                        <div class="mb-3 input">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control input-field" id="email" name="email">
                        </div>
                        <div class="mb-3 input">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control input-field" id="password" name="password">
                        </div>
                        <p>Forgot your <a href="#">Password</a> ?</p>
                        <div class="row">
                            <button type="submit" value="login" class="btn btn-primary w-auto mb-3">Login</button>
                        </div>
                        <p class="register">Sign in or <a href="/user/register.php">Create</a> a Starbucks Account
                        </p>
                    </div>
                </div>
            </div>
        </form>
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
    <!-- End Footer -->
    <!-- SCRIPT -->
    <script src="js/bootstrap.js"></script>

    <!-- JS SWAL -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/sweetAlert.js"></script>
</body>

</html>