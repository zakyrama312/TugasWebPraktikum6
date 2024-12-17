<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 6</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <h5 class="navbar-brand text-white" href="#">Praktikum 6</h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="logout.php" class="nav-link active text-white btn btn-outline-danger"
                        aria-current="page">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Konten Tengah -->
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <h1 class="text-center">Selamat Datang <?= $_SESSION['nama'] ?></h1>
    </div>





    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>